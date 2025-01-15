<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\CreateDevicePool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectArn
 * @property string $name
 * @property string|null $description
 * @property list<Shapes\Rule> $rules
 * @property int|null $maxDevices
 */
class CreateDevicePoolRequest extends Request
{
    /**
     * @param array{
     *     projectArn: string,
     *     name: string,
     *     description?: string|null,
     *     rules: list<Shapes\Rule>,
     *     maxDevices?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
