<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeIdFormat;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Resource
 */
class DescribeIdFormatRequest extends Request
{
    /**
     * @param array{Resource?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
