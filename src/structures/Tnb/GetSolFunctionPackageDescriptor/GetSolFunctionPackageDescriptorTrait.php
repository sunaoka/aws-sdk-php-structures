<?php

namespace Sunaoka\Aws\Structures\Tnb\GetSolFunctionPackageDescriptor;

trait GetSolFunctionPackageDescriptorTrait
{
    /**
     * @param GetSolFunctionPackageDescriptorRequest $args
     * @return GetSolFunctionPackageDescriptorResponse
     */
    public function getSolFunctionPackageDescriptor(GetSolFunctionPackageDescriptorRequest $args)
    {
        $result = parent::getSolFunctionPackageDescriptor($args->toArray());
        return new GetSolFunctionPackageDescriptorResponse($result->toArray());
    }
}
