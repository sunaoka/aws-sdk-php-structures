<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\RegisterAppInstanceUserEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeviceToken
 * @property string $VoipDeviceToken
 */
class EndpointAttributes extends Shape
{
    /**
     * @param array{
     *     DeviceToken: string,
     *     VoipDeviceToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
