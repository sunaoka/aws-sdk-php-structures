<?php

namespace Sunaoka\Aws\Structures\LocationService\BatchEvaluateGeofences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CollectionName
 * @property list<Shapes\DevicePositionUpdate> $DevicePositionUpdates
 */
class BatchEvaluateGeofencesRequest extends Request
{
    /**
     * @param array{
     *     CollectionName: string,
     *     DevicePositionUpdates: list<Shapes\DevicePositionUpdate>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
