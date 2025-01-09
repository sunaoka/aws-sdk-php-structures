<?php

namespace Sunaoka\Aws\Structures\LocationService\BatchPutGeofence;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CollectionName
 * @property list<Shapes\BatchPutGeofenceRequestEntry> $Entries
 */
class BatchPutGeofenceRequest extends Request
{
    /**
     * @param array{
     *     CollectionName: string,
     *     Entries: list<Shapes\BatchPutGeofenceRequestEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
