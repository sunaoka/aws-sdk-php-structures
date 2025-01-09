<?php

namespace Sunaoka\Aws\Structures\CloudFormation\GetStackPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackName
 */
class GetStackPolicyRequest extends Request
{
    /**
     * @param array{StackName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
