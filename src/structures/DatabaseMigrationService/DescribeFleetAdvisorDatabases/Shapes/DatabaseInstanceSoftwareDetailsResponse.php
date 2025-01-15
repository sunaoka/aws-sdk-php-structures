<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeFleetAdvisorDatabases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Engine
 * @property string|null $EngineVersion
 * @property string|null $EngineEdition
 * @property string|null $ServicePack
 * @property string|null $SupportLevel
 * @property int|null $OsArchitecture
 * @property string|null $Tooltip
 */
class DatabaseInstanceSoftwareDetailsResponse extends Shape
{
    /**
     * @param array{
     *     Engine?: string|null,
     *     EngineVersion?: string|null,
     *     EngineEdition?: string|null,
     *     ServicePack?: string|null,
     *     SupportLevel?: string|null,
     *     OsArchitecture?: int|null,
     *     Tooltip?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
