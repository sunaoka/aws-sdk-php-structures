<?php

namespace Sunaoka\Aws\Structures\OpsWorks\RegisterInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackId
 * @property string|null $Hostname
 * @property string|null $PublicIp
 * @property string|null $PrivateIp
 * @property string|null $RsaPublicKey
 * @property string|null $RsaPublicKeyFingerprint
 * @property Shapes\InstanceIdentity|null $InstanceIdentity
 */
class RegisterInstanceRequest extends Request
{
    /**
     * @param array{
     *     StackId: string,
     *     Hostname?: string|null,
     *     PublicIp?: string|null,
     *     PrivateIp?: string|null,
     *     RsaPublicKey?: string|null,
     *     RsaPublicKeyFingerprint?: string|null,
     *     InstanceIdentity?: Shapes\InstanceIdentity|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
