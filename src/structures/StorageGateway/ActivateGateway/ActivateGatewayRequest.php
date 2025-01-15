<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ActivateGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ActivationKey
 * @property string $GatewayName
 * @property string $GatewayTimezone
 * @property string $GatewayRegion
 * @property string|null $GatewayType
 * @property string|null $TapeDriveType
 * @property string|null $MediumChangerType
 * @property list<Shapes\Tag>|null $Tags
 */
class ActivateGatewayRequest extends Request
{
    /**
     * @param array{
     *     ActivationKey: string,
     *     GatewayName: string,
     *     GatewayTimezone: string,
     *     GatewayRegion: string,
     *     GatewayType?: string|null,
     *     TapeDriveType?: string|null,
     *     MediumChangerType?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
