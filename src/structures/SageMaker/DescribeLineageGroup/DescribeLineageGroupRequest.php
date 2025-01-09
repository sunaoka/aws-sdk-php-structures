<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeLineageGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LineageGroupName
 */
class DescribeLineageGroupRequest extends Request
{
    /**
     * @param array{LineageGroupName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
