<?php

namespace Sunaoka\Aws\Structures\DocDB\DescribeDBEngineVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Engine
 * @property string|null $EngineVersion
 * @property string|null $DBParameterGroupFamily
 * @property string|null $DBEngineDescription
 * @property string|null $DBEngineVersionDescription
 * @property list<UpgradeTarget>|null $ValidUpgradeTarget
 * @property list<string>|null $ExportableLogTypes
 * @property bool|null $SupportsLogExportsToCloudwatchLogs
 */
class DBEngineVersion extends Shape
{
    /**
     * @param array{
     *     Engine?: string|null,
     *     EngineVersion?: string|null,
     *     DBParameterGroupFamily?: string|null,
     *     DBEngineDescription?: string|null,
     *     DBEngineVersionDescription?: string|null,
     *     ValidUpgradeTarget?: list<UpgradeTarget>|null,
     *     ExportableLogTypes?: list<string>|null,
     *     SupportsLogExportsToCloudwatchLogs?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
