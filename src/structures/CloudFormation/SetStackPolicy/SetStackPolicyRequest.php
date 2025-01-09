<?php

namespace Sunaoka\Aws\Structures\CloudFormation\SetStackPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackName
 * @property string $StackPolicyBody
 * @property string $StackPolicyURL
 */
class SetStackPolicyRequest extends Request
{
    /**
     * @param array{
     *     StackName: string,
     *     StackPolicyBody?: string,
     *     StackPolicyURL?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
