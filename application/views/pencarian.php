<div class="listing">
    <div class="listing__list">
        <?php foreach ($tpp as $tpm) : ?>

            <div class="listing__item">
                <div class="listing__item__pic set-bg" data-setbg="<?php echo base_url().'upload/'.$tpm->gambar ?>">
                    <div class="listing__item__pic__btns">
                    </div>
                </div>
                <div class="listing__item__text">
                    <div class="listing__item__text__inside">
                        <h5><?php echo $tpm->nm_tpm ?></h5>
                        <ul>
                            <li><span class="icon_pin_alt"></span> <?php echo $tpm->alamat ?></li>
                            <li><span class="icon_phone"></span> <?php echo $tpm->tlp_tpm ?></li>
                            <a href="#" class="btn btn-sm btn-success">Detail</a>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- <div class="card" style="width: 30rem;">
                <img src="<?php echo base_url().'upload/'.$tpm->gambar ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $tpm->nm_tpm ?></h5>
                    <small><span class="icon_pin_alt"></span> <?php echo $tpm->alamat ?></small>
                    <p class="card-text"><span class="icon_phone"></span> <?php echo $tpm->tlp_tpm ?></p>
                    <a href="#" class="btn btn-sm btn-success">Detail</a>
                </div>
            </div> -->

        <?php endforeach; ?>
    </div>
</div>