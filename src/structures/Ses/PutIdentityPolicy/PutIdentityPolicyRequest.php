<?php

namespace Sunaoka\Aws\Structures\Ses\PutIdentityPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identity
 * @property string $PolicyName
 * @property string $Policy
 */
class PutIdentityPolicyRequest extends Request
{
    /**
     * @param array{
     *     Identity: string,
     *     PolicyName: string,
     *     Policy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
