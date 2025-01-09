<?php

namespace Sunaoka\Aws\Structures\OpsWorks\RegisterInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackId
 * @property string $Hostname
 * @property string $PublicIp
 * @property string $PrivateIp
 * @property string $RsaPublicKey
 * @property string $RsaPublicKeyFingerprint
 * @property Shapes\InstanceIdentity $InstanceIdentity
 */
class RegisterInstanceRequest extends Request
{
    /**
     * @param array{
     *     StackId: string,
     *     Hostname?: string,
     *     PublicIp?: string,
     *     PrivateIp?: string,
     *     RsaPublicKey?: string,
     *     RsaPublicKeyFingerprint?: string,
     *     InstanceIdentity?: Shapes\InstanceIdentity
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
