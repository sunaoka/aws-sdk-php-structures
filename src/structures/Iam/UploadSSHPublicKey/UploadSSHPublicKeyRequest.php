<?php

namespace Sunaoka\Aws\Structures\Iam\UploadSSHPublicKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 * @property string $SSHPublicKeyBody
 */
class UploadSSHPublicKeyRequest extends Request
{
    /**
     * @param array{
     *     UserName: string,
     *     SSHPublicKeyBody: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
