<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeAggregateIdFormat;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 */
class DescribeAggregateIdFormatRequest extends Request
{
    /**
     * @param array{DryRun?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
