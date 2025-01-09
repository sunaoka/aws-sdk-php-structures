<?php

namespace Sunaoka\Aws\Structures\Iam\UploadSSHPublicKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserName
 * @property string $SSHPublicKeyId
 * @property string $Fingerprint
 * @property string $SSHPublicKeyBody
 * @property 'Active'|'Inactive' $Status
 * @property \Aws\Api\DateTimeResult $UploadDate
 */
class SSHPublicKey extends Shape
{
    /**
     * @param array{
     *     UserName: string,
     *     SSHPublicKeyId: string,
     *     Fingerprint: string,
     *     SSHPublicKeyBody: string,
     *     Status: 'Active'|'Inactive',
     *     UploadDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
