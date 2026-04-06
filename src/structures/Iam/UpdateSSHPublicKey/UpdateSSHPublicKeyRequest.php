<?php

namespace Sunaoka\Aws\Structures\Iam\UpdateSSHPublicKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 * @property string $SSHPublicKeyId
 * @property 'Active'|'Inactive' $Status
 */
class UpdateSSHPublicKeyRequest extends Request
{
    /**
     * @param array{
     *     UserName: string,
     *     SSHPublicKeyId: string,
     *     Status: 'Active'|'Inactive'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
