<?php

namespace Sunaoka\Aws\Structures\SesV2\ListMultiRegionEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EndpointName
 * @property 'CREATING'|'READY'|'FAILED'|'DELETING'|null $Status
 * @property string|null $EndpointId
 * @property list<string>|null $Regions
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTimestamp
 */
class MultiRegionEndpoint extends Shape
{
    /**
     * @param array{
     *     EndpointName?: string|null,
     *     Status?: 'CREATING'|'READY'|'FAILED'|'DELETING'|null,
     *     EndpointId?: string|null,
     *     Regions?: list<string>|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
