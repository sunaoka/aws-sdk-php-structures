<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeFleetAdvisorDatabases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Engine
 * @property string $EngineVersion
 * @property string $EngineEdition
 * @property string $ServicePack
 * @property string $SupportLevel
 * @property int $OsArchitecture
 * @property string $Tooltip
 */
class DatabaseInstanceSoftwareDetailsResponse extends Shape
{
    /**
     * @param array{
     *     Engine?: string,
     *     EngineVersion?: string,
     *     EngineEdition?: string,
     *     ServicePack?: string,
     *     SupportLevel?: string,
     *     OsArchitecture?: int,
     *     Tooltip?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
