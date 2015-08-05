=== Bar Pie Chart ===
Contributors: Lian van der Vyver
Donate link: 
Tags: bar, charts, pie, pie charts
Requires at least: 4.2.2
Tested up to: 4.2.2
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Bar Pie Chart plugin

== Description ==

This is a plugin to display a simple nice looking pie chart with short codes.

== Installation ==

1. Upload `bar-pie-chart` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Go to any page and add the a short code in you page - see list of sample short codes below.

== Short codes ==

To display the pie chart just add this short code
  [bpc_bar_pie_chart]

You will notice that the default percent on the chart is 50% to change the value add the precent attribute and the value you want it to be
  [bpc_bar_pie_chart percent="20"]
  
You can change the color of the chart by adding the color attribute. The color can either be a name like "black" or be a Hex value like '#000000'
  [bpc_bar_pie_chart percent="30" color="black"]
  
You can make the chart smaller with the size attribute 
  [bpc_bar_pie_chart percent="60" color="#00FF00" size="small"]

== Screenshots ==

1. Basic Bar Pie Chart
2. Bar Pie Chart that is set to 60%
3. Bar Pie chart with 70% and color Black
4. Bar Pie Chart with 80%, color red and Size small

== Change log ==

= 1.0.0 =
* First release