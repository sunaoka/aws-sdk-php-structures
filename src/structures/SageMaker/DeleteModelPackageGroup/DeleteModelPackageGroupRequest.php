<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteModelPackageGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ModelPackageGroupName
 */
class DeleteModelPackageGroupRequest extends Request
{
    /**
     * @param array{ModelPackageGroupName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
