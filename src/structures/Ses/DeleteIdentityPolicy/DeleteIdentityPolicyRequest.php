<?php

namespace Sunaoka\Aws\Structures\Ses\DeleteIdentityPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identity
 * @property string $PolicyName
 */
class DeleteIdentityPolicyRequest extends Request
{
    /**
     * @param array{
     *     Identity: string,
     *     PolicyName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
