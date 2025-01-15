<?php

namespace Sunaoka\Aws\Structures\CloudFormation\SetStackPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackName
 * @property string|null $StackPolicyBody
 * @property string|null $StackPolicyURL
 */
class SetStackPolicyRequest extends Request
{
    /**
     * @param array{
     *     StackName: string,
     *     StackPolicyBody?: string|null,
     *     StackPolicyURL?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
