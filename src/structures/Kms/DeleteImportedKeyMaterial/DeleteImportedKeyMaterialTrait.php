<?php

namespace Sunaoka\Aws\Structures\Kms\DeleteImportedKeyMaterial;

trait DeleteImportedKeyMaterialTrait
{
    /**
     * @param DeleteImportedKeyMaterialRequest $args
     * @return DeleteImportedKeyMaterialResponse
     */
    public function deleteImportedKeyMaterial(DeleteImportedKeyMaterialRequest $args)
    {
        $result = parent::deleteImportedKeyMaterial($args->toArray());
        return new DeleteImportedKeyMaterialResponse($result->toArray());
    }
}
