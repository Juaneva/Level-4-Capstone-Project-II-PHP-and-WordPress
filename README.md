# Level-4-Capstone-Project-II-PHP-and-WordPress

SPECIFICATIONS
Remember Cool Tech from your last Capstone Project? The technology blogging company is back and bigger than ever before. They realised that their growth means that they need a more reliable, professional, and well-established solution to their website needs. They have identified WordPress as a viable option and asked you to implement it for them.

Since you last did work for them, they have expanded their pages, content, categories, and tags to the point where it’s not worth listing them all. Instead, they have provided you with an extract of about 50 posts and 5 pages, all tagged, categorised, and authored appropriately to help you test during web development.

To prevent you from getting distracted and reading all their glorious content, they had their South American branch translate the content to Latin. The sample content is in a single XML file that conforms to WordPress import standard and is available as CoolTech-content_latin.xml.

On top of post categorisation and tagging (which works by default in WP) Cool Tech has requested the following extra features for their site:

● A modern-looking techy theme for the whole website. It must feature Cool Tech’s main colours: #118AB2 and #EE6C4D.

● Some decorative pictures for the home page and other pages. These will be replaced later, so Cool Tech wants you to use random images from Lorem Picsum.

● All posts should automatically conform to the following styling:

○ Impact font

○ All headings and subheadings should be bold

○ The main headings should be Cool Tech blue.

○ Links should be Cool Tech orange.

○ The listing text should be right-aligned.

● All posts should display total view counts on them. Note that Cool Tech posts typically get between a few thousand and a few million views per day for the first week after publication. Thus view counts should be rounded after hitting a thousand views so that it displays, for example, “5K views” or “10M views”.

○ Cool Tech is very vain — display view counts at the top of posts.

● Since the website will get many regular views, Cool Tech has asked you to implement a new “Hot Right Now” feature. You are to create a page that lists the top ten hot-right-now posts. These are posts with the most views in the last hour.

PUBLICATION
The compulsory task specification below lists which files should be submitted for the project. Unfortunately, because of the complexity of the website you are about to create, there is no way to publish it without incurring some extra financial costs. Thus, it is not expected that the website ever runs outside your local machine (which is why screenshots are of the utmost importance).

Task 1
Create a new project and get the aesthetics sorted.

● Create a new WordPress project. It’s best to download a new WordPress site from their website (https://wordpress.org/download/), extract it in the appropriate directory and set it up by using XAMPP.

● After setup, import the sample content provided by Cool Tech.

● Pick a theme you think is appropriate.

● Where you can, customise the colours to fit Cool Tech’s requirements.

● On each page (including the home page) add a picture or two from Lorem Picsum (https://picsum.photos/images). Note that these pictures are intended to be design placeholders and may not legally be published without a licence to do so.

● Add custom CSS to the site so that the Cool Tech post styling, as described in the specifications, is met. Note that you cannot set a custom class on every element of every post, so you’ll need to get creative with CSS selectors to customise post styling.

Submit the following:

● The CSS code you wrote in a file named cooltech.css.

● Screenshots of at least two posts, showing the required styling in action.

● A screenshot of the home page, and of one other page, showing the images you added in.

Task 2
Create a plugin to implement the last two features of the specification.

Submit the following:

● The PHP files of your plugin. This may be one or more, but must not include any theme files (that you didn’t write).

● A screenshot of a post with a non-zero view count. This need not be a thousand.

● A screenshot of the hot-right-now page, with 10 posts listed in the appropriate order.
