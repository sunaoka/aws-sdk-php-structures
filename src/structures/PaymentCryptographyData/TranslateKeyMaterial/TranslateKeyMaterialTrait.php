<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\TranslateKeyMaterial;

trait TranslateKeyMaterialTrait
{
    /**
     * @param TranslateKeyMaterialRequest $args
     * @return TranslateKeyMaterialResponse
     */
    public function translateKeyMaterial(TranslateKeyMaterialRequest $args)
    {
        $result = parent::translateKeyMaterial($args->toArray());
        return new TranslateKeyMaterialResponse($result->toArray());
    }
}
