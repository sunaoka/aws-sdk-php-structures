<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteModelPackageGroupPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ModelPackageGroupName
 */
class DeleteModelPackageGroupPolicyRequest extends Request
{
    /**
     * @param array{ModelPackageGroupName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
