<?php

namespace Sunaoka\Aws\Structures\LocationService\BatchDeleteGeofence;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CollectionName
 * @property list<string> $GeofenceIds
 */
class BatchDeleteGeofenceRequest extends Request
{
    /**
     * @param array{
     *     CollectionName: string,
     *     GeofenceIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
