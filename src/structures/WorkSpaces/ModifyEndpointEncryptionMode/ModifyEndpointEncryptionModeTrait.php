<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ModifyEndpointEncryptionMode;

trait ModifyEndpointEncryptionModeTrait
{
    /**
     * @param ModifyEndpointEncryptionModeRequest $args
     * @return ModifyEndpointEncryptionModeResponse
     */
    public function modifyEndpointEncryptionMode(ModifyEndpointEncryptionModeRequest $args)
    {
        $result = parent::modifyEndpointEncryptionMode($args->toArray());
        return new ModifyEndpointEncryptionModeResponse($result->toArray());
    }
}
