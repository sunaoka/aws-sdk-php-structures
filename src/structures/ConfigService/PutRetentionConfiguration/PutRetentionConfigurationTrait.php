<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutRetentionConfiguration;

trait PutRetentionConfigurationTrait
{
    /**
     * @param PutRetentionConfigurationRequest $args
     * @return PutRetentionConfigurationResponse
     */
    public function putRetentionConfiguration(PutRetentionConfigurationRequest $args)
    {
        $result = parent::putRetentionConfiguration($args->toArray());
        return new PutRetentionConfigurationResponse($result->toArray());
    }
}
