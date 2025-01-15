<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeSourceRegions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RegionName
 * @property string|null $Endpoint
 * @property string|null $Status
 * @property bool|null $SupportsDBInstanceAutomatedBackupsReplication
 */
class SourceRegion extends Shape
{
    /**
     * @param array{
     *     RegionName?: string|null,
     *     Endpoint?: string|null,
     *     Status?: string|null,
     *     SupportsDBInstanceAutomatedBackupsReplication?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
