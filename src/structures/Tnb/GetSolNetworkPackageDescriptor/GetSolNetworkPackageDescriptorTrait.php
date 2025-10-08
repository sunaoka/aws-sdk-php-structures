<?php

namespace Sunaoka\Aws\Structures\Tnb\GetSolNetworkPackageDescriptor;

trait GetSolNetworkPackageDescriptorTrait
{
    /**
     * @param GetSolNetworkPackageDescriptorRequest $args
     * @return GetSolNetworkPackageDescriptorResponse
     */
    public function getSolNetworkPackageDescriptor(GetSolNetworkPackageDescriptorRequest $args)
    {
        $result = parent::getSolNetworkPackageDescriptor($args->toArray());
        return new GetSolNetworkPackageDescriptorResponse($result->toArray());
    }
}
