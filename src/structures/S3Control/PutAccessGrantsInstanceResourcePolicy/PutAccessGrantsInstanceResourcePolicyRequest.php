<?php

namespace Sunaoka\Aws\Structures\S3Control\PutAccessGrantsInstanceResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $Policy
 * @property string|null $Organization
 */
class PutAccessGrantsInstanceResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     Policy: string,
     *     Organization?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
