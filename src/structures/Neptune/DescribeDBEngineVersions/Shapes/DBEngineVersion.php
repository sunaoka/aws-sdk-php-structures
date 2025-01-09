<?php

namespace Sunaoka\Aws\Structures\Neptune\DescribeDBEngineVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Engine
 * @property string $EngineVersion
 * @property string $DBParameterGroupFamily
 * @property string $DBEngineDescription
 * @property string $DBEngineVersionDescription
 * @property CharacterSet $DefaultCharacterSet
 * @property list<CharacterSet> $SupportedCharacterSets
 * @property list<UpgradeTarget> $ValidUpgradeTarget
 * @property list<Timezone> $SupportedTimezones
 * @property list<string> $ExportableLogTypes
 * @property bool $SupportsLogExportsToCloudwatchLogs
 * @property bool $SupportsReadReplica
 * @property bool $SupportsGlobalDatabases
 */
class DBEngineVersion extends Shape
{
    /**
     * @param array{
     *     Engine?: string,
     *     EngineVersion?: string,
     *     DBParameterGroupFamily?: string,
     *     DBEngineDescription?: string,
     *     DBEngineVersionDescription?: string,
     *     DefaultCharacterSet?: CharacterSet,
     *     SupportedCharacterSets?: list<CharacterSet>,
     *     ValidUpgradeTarget?: list<UpgradeTarget>,
     *     SupportedTimezones?: list<Timezone>,
     *     ExportableLogTypes?: list<string>,
     *     SupportsLogExportsToCloudwatchLogs?: bool,
     *     SupportsReadReplica?: bool,
     *     SupportsGlobalDatabases?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
