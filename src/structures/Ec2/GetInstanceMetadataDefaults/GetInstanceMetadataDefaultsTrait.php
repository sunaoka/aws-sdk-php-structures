<?php

namespace Sunaoka\Aws\Structures\Ec2\GetInstanceMetadataDefaults;

trait GetInstanceMetadataDefaultsTrait
{
    /**
     * @param GetInstanceMetadataDefaultsRequest $args
     * @return GetInstanceMetadataDefaultsResponse
     */
    public function getInstanceMetadataDefaults(GetInstanceMetadataDefaultsRequest $args)
    {
        $result = parent::getInstanceMetadataDefaults($args->toArray());
        return new GetInstanceMetadataDefaultsResponse($result->toArray());
    }
}
