<?php

namespace Sunaoka\Aws\Structures\SageMaker\PutModelPackageGroupPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ModelPackageGroupName
 * @property string $ResourcePolicy
 */
class PutModelPackageGroupPolicyRequest extends Request
{
    /**
     * @param array{
     *     ModelPackageGroupName: string,
     *     ResourcePolicy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
