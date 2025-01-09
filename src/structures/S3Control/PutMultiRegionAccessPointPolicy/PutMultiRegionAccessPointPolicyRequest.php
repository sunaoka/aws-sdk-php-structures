<?php

namespace Sunaoka\Aws\Structures\S3Control\PutMultiRegionAccessPointPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $ClientToken
 * @property Shapes\PutMultiRegionAccessPointPolicyInput $Details
 */
class PutMultiRegionAccessPointPolicyRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     ClientToken: string,
     *     Details: Shapes\PutMultiRegionAccessPointPolicyInput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
