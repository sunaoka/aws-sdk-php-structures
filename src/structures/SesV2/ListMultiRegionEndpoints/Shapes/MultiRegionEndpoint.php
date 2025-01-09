<?php

namespace Sunaoka\Aws\Structures\SesV2\ListMultiRegionEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EndpointName
 * @property 'CREATING'|'READY'|'FAILED'|'DELETING' $Status
 * @property string $EndpointId
 * @property list<string> $Regions
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $LastUpdatedTimestamp
 */
class MultiRegionEndpoint extends Shape
{
    /**
     * @param array{
     *     EndpointName?: string,
     *     Status?: 'CREATING'|'READY'|'FAILED'|'DELETING',
     *     EndpointId?: string,
     *     Regions?: list<string>,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
