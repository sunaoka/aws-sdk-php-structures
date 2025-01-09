<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\UpdateDevicePool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string $name
 * @property string $description
 * @property list<Shapes\Rule> $rules
 * @property int $maxDevices
 * @property bool $clearMaxDevices
 */
class UpdateDevicePoolRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     name?: string,
     *     description?: string,
     *     rules?: list<Shapes\Rule>,
     *     maxDevices?: int,
     *     clearMaxDevices?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
