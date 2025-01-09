<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAccessPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accessPolicyId
 */
class DescribeAccessPolicyRequest extends Request
{
    /**
     * @param array{accessPolicyId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
