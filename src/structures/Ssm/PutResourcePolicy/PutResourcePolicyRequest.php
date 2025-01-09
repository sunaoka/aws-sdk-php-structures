<?php

namespace Sunaoka\Aws\Structures\Ssm\PutResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property string $Policy
 * @property string $PolicyId
 * @property string $PolicyHash
 */
class PutResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     Policy: string,
     *     PolicyId?: string,
     *     PolicyHash?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
