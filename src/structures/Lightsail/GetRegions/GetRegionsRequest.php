<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRegions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $includeAvailabilityZones
 * @property bool|null $includeRelationalDatabaseAvailabilityZones
 */
class GetRegionsRequest extends Request
{
    /**
     * @param array{
     *     includeAvailabilityZones?: bool|null,
     *     includeRelationalDatabaseAvailabilityZones?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
