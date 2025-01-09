<?php

namespace Sunaoka\Aws\Structures\Iam\DeleteSSHPublicKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 * @property string $SSHPublicKeyId
 */
class DeleteSSHPublicKeyRequest extends Request
{
    /**
     * @param array{
     *     UserName: string,
     *     SSHPublicKeyId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
