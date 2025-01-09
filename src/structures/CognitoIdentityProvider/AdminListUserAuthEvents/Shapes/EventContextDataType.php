<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminListUserAuthEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IpAddress
 * @property string $DeviceName
 * @property string $Timezone
 * @property string $City
 * @property string $Country
 */
class EventContextDataType extends Shape
{
    /**
     * @param array{
     *     IpAddress?: string,
     *     DeviceName?: string,
     *     Timezone?: string,
     *     City?: string,
     *     Country?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
