<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetTokensFromRefreshToken\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeviceKey
 * @property string|null $DeviceGroupKey
 */
class NewDeviceMetadataType extends Shape
{
    /**
     * @param array{
     *     DeviceKey?: string|null,
     *     DeviceGroupKey?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
