<?php

namespace Sunaoka\Aws\Structures\EC2InstanceConnect\SendSSHPublicKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $InstanceOSUser
 * @property string $SSHPublicKey
 * @property string|null $AvailabilityZone
 */
class SendSSHPublicKeyRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     InstanceOSUser: string,
     *     SSHPublicKey: string,
     *     AvailabilityZone?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
