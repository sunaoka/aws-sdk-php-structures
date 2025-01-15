<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\UpdateDevicePool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string|null $name
 * @property string|null $description
 * @property list<Shapes\Rule>|null $rules
 * @property int|null $maxDevices
 * @property bool|null $clearMaxDevices
 */
class UpdateDevicePoolRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     name?: string|null,
     *     description?: string|null,
     *     rules?: list<Shapes\Rule>|null,
     *     maxDevices?: int|null,
     *     clearMaxDevices?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
