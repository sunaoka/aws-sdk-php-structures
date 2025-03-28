<?php

namespace Sunaoka\Aws\Structures\SageMaker\GetModelPackageGroupPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ModelPackageGroupName
 */
class GetModelPackageGroupPolicyRequest extends Request
{
    /**
     * @param array{ModelPackageGroupName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
