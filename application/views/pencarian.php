<div class="listing">
    <div class="listing__text__top">
        <div class="listing__text__top__left">
            <h3>Hasil Pencarian</h3>
        </div>
        <div class="listing__text__top__right">
            <h5>Rumah Makan</h5>
            <span>18 Results Found</span>
        </div>
    </div>
    <div class="listing__list">
        <?php foreach ($tpp as $tpm) : ?>

            <div class="listing__item">
                <div class="listing__item__pic set-bg" data-setbg="<?php echo base_url().'upload/'.$tpm->gambar ?>">
                </div>
                <div class="listing__item__text">
                <a href="#" class="btn btn-sm btn-success">Detail</a>
                    <div class="listing__item__text__inside">
                        <h5><?php echo $tpm->nm_tpm ?></h5>
                        <ul>
                            <li><span class="icon_pin_alt"></span> <?php echo $tpm->alamat ?></li>
                            <li><span class="icon_phone"></span> <?php echo $tpm->tlp_tpm ?></li>
                        </ul>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
</div>