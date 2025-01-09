<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModelPackage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ModelPackageName
 */
class DescribeModelPackageRequest extends Request
{
    /**
     * @param array{ModelPackageName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
