<?php

namespace Sunaoka\Aws\Structures\Glacier\DescribeVault;

trait DescribeVaultTrait
{
    /**
     * @param DescribeVaultRequest $args
     * @return DescribeVaultResponse
     */
    public function describeVault(DescribeVaultRequest $args)
    {
        $result = parent::describeVault($args->toArray());
        return new DescribeVaultResponse($result->toArray());
    }
}
