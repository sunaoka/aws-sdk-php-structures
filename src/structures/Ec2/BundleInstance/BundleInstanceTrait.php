<?php

namespace Sunaoka\Aws\Structures\Ec2\BundleInstance;

trait BundleInstanceTrait
{
    /**
     * @param BundleInstanceRequest $args
     * @return BundleInstanceResponse
     */
    public function bundleInstance(BundleInstanceRequest $args)
    {
        $result = parent::bundleInstance($args->toArray());
        return new BundleInstanceResponse($result->toArray());
    }
}
