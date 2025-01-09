<?php

namespace Sunaoka\Aws\Structures\Transfer\ImportSshPublicKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServerId
 * @property string $SshPublicKeyBody
 * @property string $UserName
 */
class ImportSshPublicKeyRequest extends Request
{
    /**
     * @param array{
     *     ServerId: string,
     *     SshPublicKeyBody: string,
     *     UserName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
