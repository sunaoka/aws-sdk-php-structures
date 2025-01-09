<?php

namespace Sunaoka\Aws\Structures\Iam\ListSSHPublicKeys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserName
 * @property string $SSHPublicKeyId
 * @property 'Active'|'Inactive' $Status
 * @property \Aws\Api\DateTimeResult $UploadDate
 */
class SSHPublicKeyMetadata extends Shape
{
    /**
     * @param array{
     *     UserName: string,
     *     SSHPublicKeyId: string,
     *     Status: 'Active'|'Inactive',
     *     UploadDate: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
