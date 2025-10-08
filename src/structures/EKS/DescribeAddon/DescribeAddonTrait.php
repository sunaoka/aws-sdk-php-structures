<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeAddon;

trait DescribeAddonTrait
{
    /**
     * @param DescribeAddonRequest $args
     * @return DescribeAddonResponse
     */
    public function describeAddon(DescribeAddonRequest $args)
    {
        $result = parent::describeAddon($args->toArray());
        return new DescribeAddonResponse($result->toArray());
    }
}
