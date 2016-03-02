# SlackTeX
Simple PHP Plugin to provide LaTeX Integration in Slack

## Setup
1. Host both `index.html` and `latex.php` on a public internet facing webserver. If you're using a free provider, make sure they don't muck about with HTTP Header Responses because that will screw up the JSON.
2. In your Slack Page, create a "Custom Command". Name it whatever you like, for ease, I suggest "/latex", but it doesn't matter.
3. Set the type to a "GET Request" as opposed to a POST and put the url of wherever you've stored `latex.php` as the target.
4. Fill in the rest of the form with whatever you want, desc. etc...
5. Save and it should all be working!
