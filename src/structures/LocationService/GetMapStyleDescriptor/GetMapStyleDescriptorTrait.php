<?php

namespace Sunaoka\Aws\Structures\LocationService\GetMapStyleDescriptor;

trait GetMapStyleDescriptorTrait
{
    /**
     * @param GetMapStyleDescriptorRequest $args
     * @return GetMapStyleDescriptorResponse
     */
    public function getMapStyleDescriptor(GetMapStyleDescriptorRequest $args)
    {
        $result = parent::getMapStyleDescriptor($args->toArray());
        return new GetMapStyleDescriptorResponse($result->toArray());
    }
}
