<?php

/* @var $this yii\web\View */

//$this->title = 'View';
use yii\helpers\Html;

use yii\web\View; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Category</h2>
                    <ul class="catalog">
                        <?= \app\components\MenuWidget::widget([
                            'tpl' => 'menu'
                        ]); ?>
                    </ul><!--/category-products-->

                    <div class="brands_products"><!--brands_products-->
                        <h2>Brands</h2>
                        <div class="brands-name">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href=""> <span class="pull-right">(50)</span>Acne</a></li>
                                <li><a href=""> <span class="pull-right">(56)</span>Grüne Erde</a></li>
                                <li><a href=""> <span class="pull-right">(27)</span>Albiro</a></li>
                                <li><a href=""> <span class="pull-right">(32)</span>Ronhill</a></li>
                                <li><a href=""> <span class="pull-right">(5)</span>Oddmolly</a></li>
                                <li><a href=""> <span class="pull-right">(9)</span>Boudestijn</a></li>
                                <li><a href=""> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
                            </ul>
                        </div>
                    </div><!--/brands_products-->

                    <div class="price-range"><!--price-range-->
                        <h2>Price Range</h2>
                        <div class="well">
                            <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                            <b>$ 0</b> <b class="pull-right">$ 600</b>
                        </div>
                    </div><!--/price-range-->

                    <div class="shipping text-center"><!--shipping-->
                        <img src="images/home/shipping.jpg" alt="" />
                    </div><!--/shipping-->

                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="col-sm-5">
                        <div class="view-product">

                            <?= Html::img("/images/home/{$product->img}", ['alt' => $product->name]); ?>
                            <h3>ZOOM</h3>
                        </div>

                    </div>
                    <div class="col-sm-7">
                        <div class="product-information"><!--/product-information-->
                            <?php if($product->new): ?>
                                <img src="images/home/new.png" class="new" alt="">
                            <?php endif; ?>
                            <?php if($product->sale): ?>
                                <img src="images/home/sale.png" class="new" alt="">
                            <?php endif; ?>
                            <h2><?= $product->name ?></h2>
                            <img src="images/product-details/rating.png" alt="" />
                            <span>
									<span>US <?= $product->price ?> $</span>
									<label>Quantity:</label>
									<input type="text" value="3" />
									<button type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button>
								</span>
                            <p><b>Brand:</b> <?= $product->category->name ?></p>
                        </div><!--/product-information-->
                    </div>
                </div><!--/product-details-->


                <div class="recommended_items"><!--recommended_items-->
                    <h2 class="title text-center">recommended items</h2>

                    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <?php $count = count($hits); ;$i = 0; foreach ($hits as $hit): ?>

                            <?php if ($i % 3 == 0): ?>
                            <div class="item <?php if ($i == 0) echo 'active'?>">
                            <?php endif; ?>


                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <?= Html::img("/images/home/{$hit->img}", ['alt' => $hit->name]); ?>
                                                <h2>$<?= $hit->price ?></h2>
                                                <p><a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $hit->id]); ?>"><?= $hit->name ?></a></p>
                                                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <?php $i++; if ($i % 3 == 0 || $i == $count): ?>
                                    </div>
                                <?php endif;?>
                            <?php endforeach; ?>
                        </div>
                        <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div><!--/recommended_items-->

            </div>
        </div>
    </div>
</section>