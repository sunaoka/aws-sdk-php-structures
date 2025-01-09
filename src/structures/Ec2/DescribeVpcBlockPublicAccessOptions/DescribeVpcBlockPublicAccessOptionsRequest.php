<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcBlockPublicAccessOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 */
class DescribeVpcBlockPublicAccessOptionsRequest extends Request
{
    /**
     * @param array{DryRun?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
