<?php

namespace Sunaoka\Aws\Structures\Iam\GetSSHPublicKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 * @property string $SSHPublicKeyId
 * @property 'SSH'|'PEM' $Encoding
 */
class GetSSHPublicKeyRequest extends Request
{
    /**
     * @param array{
     *     UserName: string,
     *     SSHPublicKeyId: string,
     *     Encoding: 'SSH'|'PEM'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
