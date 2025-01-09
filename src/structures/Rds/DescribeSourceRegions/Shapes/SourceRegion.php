<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeSourceRegions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RegionName
 * @property string $Endpoint
 * @property string $Status
 * @property bool $SupportsDBInstanceAutomatedBackupsReplication
 */
class SourceRegion extends Shape
{
    /**
     * @param array{
     *     RegionName?: string,
     *     Endpoint?: string,
     *     Status?: string,
     *     SupportsDBInstanceAutomatedBackupsReplication?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
