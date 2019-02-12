<!DOCTYPE html>


<html>
<head>
    <meta charset = "utf-8">
    <title>Booking Receipt</title>
</head>
<body>
</body>
</html>
<style type = "text/css">
    p {font-family: "Calibri Light"}
    body {background-color: darkgoldenrod}
</style>
<?php

session_start();
if (isset($_POST['submit'])) {

    $index = $_POST["Index"] ? $_POST["Index"] : '';


    $book = $_SESSION['books'][$index];
    print "<br>Book title is <em>$book</em>
           <p>     ";


    if ($index == 1) {
        print "What are your secrets? What are you ashamed of? That’s the stuff of riveting fiction. Cambridge professor and acclaimed novelist Erich Ackerman, the protagonist of this taught and gripping novel, knows this much is true. In fact, they’re the very things that fuel his work. When Ackerman becomes enamored by a young aspiring writer Maurice Swift in Berlin, the city of his childhood, he should know better than to reveal the darkest parts of his personal history—a secret past in Hitler’s Germany. Shouldn’t a writer know that “everything is copy” as Nora Ephron famously once said? This novel is as craftily written as Swift himself, whose cunning only intensifies as his life ascends as the expense of his mentor’s.";
    } elseif ($index == 2) {
        print "In my childhood, I was known as the boy whose mother had run off with an Englishman. The man was in fact German, but in small‑town India in those days, all white foreigners were largely thought of as British. So begins the fourth novel from the renowned Indian writer Anurandha Roy, whose most recent novel, Sleeping on Jupiter, was longlisted for the 2016 Man Booker prize. This is the story of Myshkin and his mother, Gayatri, a rebellious artist who abandons motherhood and marriage to follow her desire for freedom during the Second World War and Indian Independence. Cut to present day. Elderly Myshkin receives a bulky envelope in the mail that prompts the journey he’s been waiting for his whole life: to find out who his mother really was.

";
    } elseif ($index == 3) {
        print "Though no one can get their hands on an early copy of Michelle Obama’s memoir, we are sure it’s going to be full of hard-earned life lessons and insights from the former First Lady, lawyer and University administrator, who is apparently open about being frustrated at having to put aside her own career ambition for her husband. If there was ever a time to be reminded that of Obama’s wise words, “when they go low, we go high,” it’s now. You may not be able to make it to her sold-out Beyoncé-like stadium tour organized by Live Nation, who usually manage concerts for the likes of Rihanna and U2. (With some tickets being resold for as much as $3,500, who can?) However, we’ll all be able to get our paws on her book come November 14. Let’s hope this is the beginning of Michelle Obama reclaiming her time and ambitions.";
    } elseif ($index == 4) {
        print "From the award-winning translator, poet, and author of Ways to Disappear comes one of the season’s most talked about novels about power imbalances and the risks of speaking up in a profoundly divided country. In this case, in an unnamed island country ten years after the collapse of a U.S.-supported regime. When a young woman, who has been assisting a powerful senator on the campaign trail is found dead, Lena recalls her own fraught history with the senator and the violent incident that ended their relationship. Why didn’t Lena speak up then, and will her family’s support of the former political regime still impact her credibility? What if her instinct about this young woman’s death is wrong? This all too timely novel is a gripping and unnerving reflection of our times.";
    } elseif ($index == 5) {
        print "As the U.S.—and much of the world—has been gripped by the sexual assault accusations against potential Supreme Court Judge Brett Kavanaugh, the response from women has been explosive. Rebecca Traister’s Good and Bad is an excellent guide to unpacking and illuminating historical context for this outpouring of anger; it’s the handbook for understanding the #MeToo movement, too. Through exhaustive and compelling research, Traister examines women’s anger as a powerful political tool, one that’s long been ignored as a potent catalyst for social change. Furthermore, it examines what patriarchy means and reveals the extent to which certain groups of men have sought to curb and marginalize women’s voices. To all the men out there who want to be allies should read this book and get up to speed.";
    } elseif ($index == 6) {
        print "Ever wondered what a hedge fund manager actually does to take home a cool $30 million even when his fund goes belly up? Enter the world of Barry Cohen, with $2.4 billion under management, whose wife has just clawed his face as if she were a feral cat. He also happens to be bleeding from where the nanny gouged him above the left brow. Now he’s staggering toward the Port Authority in Manhattan, thinking that a humble Greyhound bus ride might reconnect him to some lost part of himself. Watch the book trailer with Ben Stiller to get sense of how much this satirical novel skewers the world of finance, then read the book for a window into the ridiculous and nonetheless poignant lives of a family—and perhaps a country—on the brink of collapse.";
    } elseif ($index == 7) {
        print "For decades, if you’d walked down Fifth Avenue in Manhattan, you might have been lucky enough to spot Bill Cunningham, the beloved fashion photographer for The New York Times, dressed in his usual blue jacket snapping a picture of an exquisitely or outrageously dressed fashionista going about her business. That weekend you’d glimpse his mosaic of photos in the Sunday Styles that would reveal a trend, or at the very least plenty of playful ingenuity. This posthumously published memoir, with a touching forward by New Yorker staff writer Hilton Als, gives insight into the very private man behind the lens. If nothing else, this captivating read will reinvigorate the way you see the world, and hopefully inspire some radical dressing, too.";
    } elseif ($index == 8) {
        print "Beloved British cultural critic and writer Olivia Laing was known most recently for The Lonely City, an investigation into loneliness by way of several iconic artists including Andy Warhol, Edward Hopper, and David Wojnarowicz. Her new book is a real-time novel about the summer of 2017, Trump and Brexit, love and anxiety. She draws from her own life—what it was like to be an artist adjusting to married life while Trump was Tweeting about nuclear war—and from the life of punk poet, writer, and counterculture experimentalist Kathy Acker. Combining forces, she creates one of the most compelling commitment-phobic protagonists to come along in years.";
    } elseif ($index == 9) {
        print "In this timely collection of essays, Emmy-winning actress and political activist America Ferrera mines her own cross-cultural Honduran and American upbringing and gathers thirty-one influential friends and change-maker—such as Lin-Manuel Miranda, Roxane Gay, Issa Rae, Kumail Nanjiani, and Uzo Aduba—to talk about what it’s like to be an immigrant, a child or grandchild of immigrants, an indigenous person, or someone with deep connections to more than one culture. Even though this anthology speaks to the American experience, the themes of belonging and identity will hit home for anyone who’s ever felt torn between two cultures or two places equally dear to them.";
    } else {
        print "Nico Walker wrote this edgy novel on a typewriter from inside a Kentucky federal prison where he’s currently serving an 11-year sentence for bank robbery. The young protagonist in Cherry is an Army Medic (just like Walker was) who returns from Iraq’s war zones with severe PTSD. To cope, he turns to drugs—just as the opioid crisis is ravaging the Midwest. When the money runs out, he turns to robbing banks. Walker’s raw confessional novel, aptly compared to Jesus’ Son and Reservoir Dogs, is a devastating example of art imitating life.";

    }
}

print"</p> <h4>If you are satisfied with the book, checkout via this <a href = 'CheckOut.php' >link.</a></h4>";
print"<h4>Go back to the <a href = 'index.php'>homePage.</a></h4>";

