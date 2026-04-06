<?php

namespace Sunaoka\Aws\Structures\Kms\DeleteImportedKeyMaterial;

trait DeleteImportedKeyMaterialTrait
{
    /**
     * @param DeleteImportedKeyMaterialRequest $args
     * @return void
     */
    public function deleteImportedKeyMaterial(DeleteImportedKeyMaterialRequest $args)
    {
        parent::deleteImportedKeyMaterial($args->toArray());
    }
}
