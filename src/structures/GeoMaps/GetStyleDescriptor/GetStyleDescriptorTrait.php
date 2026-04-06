<?php

namespace Sunaoka\Aws\Structures\GeoMaps\GetStyleDescriptor;

trait GetStyleDescriptorTrait
{
    /**
     * @param GetStyleDescriptorRequest $args
     * @return GetStyleDescriptorResponse
     */
    public function getStyleDescriptor(GetStyleDescriptorRequest $args)
    {
        $result = parent::getStyleDescriptor($args->toArray());
        return new GetStyleDescriptorResponse($result->toArray());
    }
}
