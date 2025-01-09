<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeOrderableReplicationInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeOrderableReplicationInstancesRequest extends Request
{
    /**
     * @param array{
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
