<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceMetadataDefaults;

trait ModifyInstanceMetadataDefaultsTrait
{
    /**
     * @param ModifyInstanceMetadataDefaultsRequest $args
     * @return ModifyInstanceMetadataDefaultsResponse
     */
    public function modifyInstanceMetadataDefaults(ModifyInstanceMetadataDefaultsRequest $args)
    {
        $result = parent::modifyInstanceMetadataDefaults($args->toArray());
        return new ModifyInstanceMetadataDefaultsResponse($result->toArray());
    }
}
