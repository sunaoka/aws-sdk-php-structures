<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\RegisterAppInstanceUserEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeviceToken
 * @property string|null $VoipDeviceToken
 */
class EndpointAttributes extends Shape
{
    /**
     * @param array{
     *     DeviceToken: string,
     *     VoipDeviceToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
