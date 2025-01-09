<?php

namespace Sunaoka\Aws\Structures\SageMaker\BatchDescribeModelPackage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ModelPackageArnList
 */
class BatchDescribeModelPackageRequest extends Request
{
    /**
     * @param array{ModelPackageArnList: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
