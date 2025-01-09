<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\RespondToAuthChallenge\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeviceKey
 * @property string $DeviceGroupKey
 */
class NewDeviceMetadataType extends Shape
{
    /**
     * @param array{
     *     DeviceKey?: string,
     *     DeviceGroupKey?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
