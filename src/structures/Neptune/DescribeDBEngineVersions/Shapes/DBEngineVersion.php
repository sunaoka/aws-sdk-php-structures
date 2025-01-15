<?php

namespace Sunaoka\Aws\Structures\Neptune\DescribeDBEngineVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Engine
 * @property string|null $EngineVersion
 * @property string|null $DBParameterGroupFamily
 * @property string|null $DBEngineDescription
 * @property string|null $DBEngineVersionDescription
 * @property CharacterSet|null $DefaultCharacterSet
 * @property list<CharacterSet>|null $SupportedCharacterSets
 * @property list<UpgradeTarget>|null $ValidUpgradeTarget
 * @property list<Timezone>|null $SupportedTimezones
 * @property list<string>|null $ExportableLogTypes
 * @property bool|null $SupportsLogExportsToCloudwatchLogs
 * @property bool|null $SupportsReadReplica
 * @property bool|null $SupportsGlobalDatabases
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
     *     DefaultCharacterSet?: CharacterSet|null,
     *     SupportedCharacterSets?: list<CharacterSet>|null,
     *     ValidUpgradeTarget?: list<UpgradeTarget>|null,
     *     SupportedTimezones?: list<Timezone>|null,
     *     ExportableLogTypes?: list<string>|null,
     *     SupportsLogExportsToCloudwatchLogs?: bool|null,
     *     SupportsReadReplica?: bool|null,
     *     SupportsGlobalDatabases?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
