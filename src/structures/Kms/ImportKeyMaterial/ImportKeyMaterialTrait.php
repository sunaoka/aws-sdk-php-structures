<?php

namespace Sunaoka\Aws\Structures\Kms\ImportKeyMaterial;

trait ImportKeyMaterialTrait
{
    /**
     * @param ImportKeyMaterialRequest $args
     * @return ImportKeyMaterialResponse
     */
    public function importKeyMaterial(ImportKeyMaterialRequest $args)
    {
        $result = parent::importKeyMaterial($args->toArray());
        return new ImportKeyMaterialResponse($result->toArray());
    }
}
