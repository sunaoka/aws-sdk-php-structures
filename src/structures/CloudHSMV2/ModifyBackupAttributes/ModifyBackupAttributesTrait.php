<?php

namespace Sunaoka\Aws\Structures\CloudHSMV2\ModifyBackupAttributes;

trait ModifyBackupAttributesTrait
{
    /**
     * @param ModifyBackupAttributesRequest $args
     * @return ModifyBackupAttributesResponse
     */
    public function modifyBackupAttributes(ModifyBackupAttributesRequest $args)
    {
        $result = parent::modifyBackupAttributes($args->toArray());
        return new ModifyBackupAttributesResponse($result->toArray());
    }
}
