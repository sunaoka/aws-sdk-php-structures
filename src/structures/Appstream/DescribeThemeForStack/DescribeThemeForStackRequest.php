<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeThemeForStack;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackName
 */
class DescribeThemeForStackRequest extends Request
{
    /**
     * @param array{StackName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
