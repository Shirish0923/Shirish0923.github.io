                    <section class="block_area block_area_category">
                        <div class="block_area-header">
                            <div class="float-left bah-heading mr-4">
                                <h2 class="cat-heading">Recent Releases</h2>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="tab-content">
                            <div class="block_area-content block_area-list film_list film_list-grid film_list-wfeature">
                                <div class="film_list-wrap">
                                <?php 
                                $json = file_get_contents("$api/recent-release?type=1");
                                $json = json_decode($json, true);
                                foreach($json as $recentRelease) { ?>
                                    <div class="flw-item ">
                                        <div class="film-poster">
                                            <div class="tick ltr">
                                               
                                            </div>
                                            <div class="tick rtl">
                                                <div class="tick-item tick-eps amp-algn">Episode <?=$recentRelease['episodeNum']?>
                                                </div>
                                            </div>
                                            <img class="film-poster-img lazyload"
                                                data-src="<?=$recentRelease['imgUrl']?>"
                                                src="/files/images/no_poster.jpg"
                                                alt="<?=$recentRelease['name']?>">
                                            <a class="film-poster-ahref"
                                                href="/watch/<?=$recentRelease['episodeId']?>"
                                                title="<?=$recentRelease['name']?>"
                                                data-jname="<?=$recentRelease['name']?>"><i class="fas fa-play"></i></a>
                                        </div>
                                        <div class="film-detail">
                                            <h3 class="film-name">
                                                <a
                                                    href="/watch/<?=$recentRelease['episodeId']?>"
                                                    title="<?=$recentRelease['name']?>"
                                                    data-jname="<?=$recentRelease['name']?>"><?=$recentRelease['name']?></a>
                                            </h3>
                                            <div class="fd-infor">
                                                <span class="fdi-item"><?=$recentRelease['subOrDub']?></span>
                                                <span class="dot"></span>
                                                <span class="fdi-item">Latest</span>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                <?php } ?>

                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </section>