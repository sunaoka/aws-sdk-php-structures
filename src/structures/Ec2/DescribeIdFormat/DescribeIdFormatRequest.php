<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeIdFormat;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Resource
 */
class DescribeIdFormatRequest extends Request
{
    /**
     * @param array{Resource?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
