<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\UpdateFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $fleetId
 * @property string|null $description
 */
class UpdateFleetRequest extends Request
{
    /**
     * @param array{
     *     fleetId: string,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
