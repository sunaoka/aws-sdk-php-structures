<?php

namespace Sunaoka\Aws\Structures\Transfer\DeleteSshPublicKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServerId
 * @property string $SshPublicKeyId
 * @property string $UserName
 */
class DeleteSshPublicKeyRequest extends Request
{
    /**
     * @param array{
     *     ServerId: string,
     *     SshPublicKeyId: string,
     *     UserName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
