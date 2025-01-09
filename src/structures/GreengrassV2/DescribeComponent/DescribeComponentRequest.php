<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\DescribeComponent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class DescribeComponentRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
