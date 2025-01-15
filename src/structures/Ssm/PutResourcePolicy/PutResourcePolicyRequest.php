<?php

namespace Sunaoka\Aws\Structures\Ssm\PutResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property string $Policy
 * @property string|null $PolicyId
 * @property string|null $PolicyHash
 */
class PutResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     Policy: string,
     *     PolicyId?: string|null,
     *     PolicyHash?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
