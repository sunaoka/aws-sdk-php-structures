<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ActivateGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ActivationKey
 * @property string $GatewayName
 * @property string $GatewayTimezone
 * @property string $GatewayRegion
 * @property string $GatewayType
 * @property string $TapeDriveType
 * @property string $MediumChangerType
 * @property list<Shapes\Tag> $Tags
 */
class ActivateGatewayRequest extends Request
{
    /**
     * @param array{
     *     ActivationKey: string,
     *     GatewayName: string,
     *     GatewayTimezone: string,
     *     GatewayRegion: string,
     *     GatewayType?: string,
     *     TapeDriveType?: string,
     *     MediumChangerType?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
