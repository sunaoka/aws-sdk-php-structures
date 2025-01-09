<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\CreateDevicePool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectArn
 * @property string $name
 * @property string $description
 * @property list<Shapes\Rule> $rules
 * @property int $maxDevices
 */
class CreateDevicePoolRequest extends Request
{
    /**
     * @param array{
     *     projectArn: string,
     *     name: string,
     *     description?: string,
     *     rules: list<Shapes\Rule>,
     *     maxDevices?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
