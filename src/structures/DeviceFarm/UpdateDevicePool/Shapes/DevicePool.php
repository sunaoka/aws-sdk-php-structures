<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\UpdateDevicePool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $description
 * @property 'CURATED'|'PRIVATE'|null $type
 * @property list<Rule>|null $rules
 * @property int|null $maxDevices
 */
class DevicePool extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     type?: 'CURATED'|'PRIVATE'|null,
     *     rules?: list<Rule>|null,
     *     maxDevices?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
