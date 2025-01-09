<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModelPackageGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ModelPackageGroupName
 */
class DescribeModelPackageGroupRequest extends Request
{
    /**
     * @param array{ModelPackageGroupName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
