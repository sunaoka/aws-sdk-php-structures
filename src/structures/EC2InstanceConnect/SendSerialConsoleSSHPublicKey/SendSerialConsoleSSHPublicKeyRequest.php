<?php

namespace Sunaoka\Aws\Structures\EC2InstanceConnect\SendSerialConsoleSSHPublicKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property int<0, 0> $SerialPort
 * @property string $SSHPublicKey
 */
class SendSerialConsoleSSHPublicKeyRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     SerialPort?: int<0, 0>,
     *     SSHPublicKey: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
