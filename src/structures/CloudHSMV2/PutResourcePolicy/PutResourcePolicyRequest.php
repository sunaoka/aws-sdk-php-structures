<?php

namespace Sunaoka\Aws\Structures\CloudHSMV2\PutResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ResourceArn
 * @property string|null $Policy
 */
class PutResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn?: string|null,
     *     Policy?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
