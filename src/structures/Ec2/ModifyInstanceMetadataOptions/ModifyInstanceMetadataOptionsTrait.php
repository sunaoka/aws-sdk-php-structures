<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceMetadataOptions;

trait ModifyInstanceMetadataOptionsTrait
{
    /**
     * @param ModifyInstanceMetadataOptionsRequest $args
     * @return ModifyInstanceMetadataOptionsResponse
     */
    public function modifyInstanceMetadataOptions(ModifyInstanceMetadataOptionsRequest $args)
    {
        $result = parent::modifyInstanceMetadataOptions($args->toArray());
        return new ModifyInstanceMetadataOptionsResponse($result->toArray());
    }
}
