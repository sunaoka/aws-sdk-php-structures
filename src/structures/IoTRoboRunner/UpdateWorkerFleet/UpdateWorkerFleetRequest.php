<?php

namespace Sunaoka\Aws\Structures\IoTRoboRunner\UpdateWorkerFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string|null $name
 * @property string|null $additionalFixedProperties
 */
class UpdateWorkerFleetRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     name?: string|null,
     *     additionalFixedProperties?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
