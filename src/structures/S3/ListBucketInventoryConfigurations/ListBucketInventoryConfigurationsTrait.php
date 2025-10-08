<?php

namespace Sunaoka\Aws\Structures\S3\ListBucketInventoryConfigurations;

trait ListBucketInventoryConfigurationsTrait
{
    /**
     * @param ListBucketInventoryConfigurationsRequest $args
     * @return ListBucketInventoryConfigurationsResponse
     */
    public function listBucketInventoryConfigurations(ListBucketInventoryConfigurationsRequest $args)
    {
        $result = parent::listBucketInventoryConfigurations($args->toArray());
        return new ListBucketInventoryConfigurationsResponse($result->toArray());
    }
}
