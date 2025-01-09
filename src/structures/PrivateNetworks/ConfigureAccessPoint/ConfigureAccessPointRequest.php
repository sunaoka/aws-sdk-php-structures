<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\ConfigureAccessPoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accessPointArn
 * @property string $cpiSecretKey
 * @property string $cpiUserId
 * @property string $cpiUserPassword
 * @property string $cpiUsername
 * @property Shapes\Position $position
 */
class ConfigureAccessPointRequest extends Request
{
    /**
     * @param array{
     *     accessPointArn: string,
     *     cpiSecretKey?: string,
     *     cpiUserId?: string,
     *     cpiUserPassword?: string,
     *     cpiUsername?: string,
     *     position?: Shapes\Position
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
