<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminListUserAuthEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IpAddress
 * @property string|null $DeviceName
 * @property string|null $Timezone
 * @property string|null $City
 * @property string|null $Country
 */
class EventContextDataType extends Shape
{
    /**
     * @param array{
     *     IpAddress?: string|null,
     *     DeviceName?: string|null,
     *     Timezone?: string|null,
     *     City?: string|null,
     *     Country?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
