<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRegions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $includeAvailabilityZones
 * @property bool $includeRelationalDatabaseAvailabilityZones
 */
class GetRegionsRequest extends Request
{
    /**
     * @param array{
     *     includeAvailabilityZones?: bool,
     *     includeRelationalDatabaseAvailabilityZones?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
