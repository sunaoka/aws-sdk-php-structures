<?php

namespace Sunaoka\Aws\Structures\Ssm\ModifyDocumentPermission;

trait ModifyDocumentPermissionTrait
{
    /**
     * @param ModifyDocumentPermissionRequest $args
     * @return ModifyDocumentPermissionResponse
     */
    public function modifyDocumentPermission(ModifyDocumentPermissionRequest $args)
    {
        $result = parent::modifyDocumentPermission($args->toArray());
        return new ModifyDocumentPermissionResponse($result->toArray());
    }
}
