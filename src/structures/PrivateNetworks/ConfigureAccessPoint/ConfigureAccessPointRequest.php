<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\ConfigureAccessPoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accessPointArn
 * @property string|null $cpiSecretKey
 * @property string|null $cpiUserId
 * @property string|null $cpiUserPassword
 * @property string|null $cpiUsername
 * @property Shapes\Position|null $position
 */
class ConfigureAccessPointRequest extends Request
{
    /**
     * @param array{
     *     accessPointArn: string,
     *     cpiSecretKey?: string|null,
     *     cpiUserId?: string|null,
     *     cpiUserPassword?: string|null,
     *     cpiUsername?: string|null,
     *     position?: Shapes\Position|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
