<?php

namespace Sunaoka\Aws\Structures\Ecr\BatchGetRepositoryScanningConfiguration;

trait BatchGetRepositoryScanningConfigurationTrait
{
    /**
     * @param BatchGetRepositoryScanningConfigurationRequest $args
     * @return BatchGetRepositoryScanningConfigurationResponse
     */
    public function batchGetRepositoryScanningConfiguration(BatchGetRepositoryScanningConfigurationRequest $args)
    {
        $result = parent::batchGetRepositoryScanningConfiguration($args->toArray());
        return new BatchGetRepositoryScanningConfigurationResponse($result->toArray());
    }
}
