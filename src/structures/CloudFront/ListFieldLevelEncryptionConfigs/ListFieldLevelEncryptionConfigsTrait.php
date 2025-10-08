<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListFieldLevelEncryptionConfigs;

trait ListFieldLevelEncryptionConfigsTrait
{
    /**
     * @param ListFieldLevelEncryptionConfigsRequest $args
     * @return ListFieldLevelEncryptionConfigsResponse
     */
    public function listFieldLevelEncryptionConfigs(ListFieldLevelEncryptionConfigsRequest $args)
    {
        $result = parent::listFieldLevelEncryptionConfigs($args->toArray());
        return new ListFieldLevelEncryptionConfigsResponse($result->toArray());
    }
}
