<?php

namespace Sunaoka\Aws\Structures\SageMaker\GetLineageGroupPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LineageGroupName
 */
class GetLineageGroupPolicyRequest extends Request
{
    /**
     * @param array{LineageGroupName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
