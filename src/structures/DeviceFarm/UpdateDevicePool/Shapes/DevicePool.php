<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\UpdateDevicePool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property string $description
 * @property 'CURATED'|'PRIVATE' $type
 * @property list<Rule> $rules
 * @property int $maxDevices
 */
class DevicePool extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     name?: string,
     *     description?: string,
     *     type?: 'CURATED'|'PRIVATE',
     *     rules?: list<Rule>,
     *     maxDevices?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
