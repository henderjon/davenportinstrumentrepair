<?php												

			header('Content-type: text/xml');
			header("Expires: Mon, 23 Jul 1993 05:00:00 GMT");
			header("Last-Modified: " . date('c'));
			echo '<?xml version="1.0" encoding="UTF-8"?>
					<urlset
						xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
						xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
						xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
						<url>
							<loc>http://davenportinstrumentrepair.com/pricing.php</loc>
							<lastmod>'.date('c').'</lastmod>
							<changefreq>monthly</changefreq>
							<priority>0.5</priority>
						</url>
					    <url>
							<loc>http://davenportinstrumentrepair.com/locations.php</loc>
							<lastmod>'.date('c').'</lastmod>
							<changefreq>monthly</changefreq>
							<priority>0.5</priority>
						</url>
					    <url>
							<loc>http://davenportinstrumentrepair.com/index.php</loc>
							<lastmod>'.date('c').'</lastmod>
							<changefreq>monthly</changefreq>
							<priority>0.5</priority>
						</url>
					</urlset>';


?>
