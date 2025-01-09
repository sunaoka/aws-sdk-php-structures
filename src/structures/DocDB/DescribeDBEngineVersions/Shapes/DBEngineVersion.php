<?php

namespace Sunaoka\Aws\Structures\DocDB\DescribeDBEngineVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Engine
 * @property string $EngineVersion
 * @property string $DBParameterGroupFamily
 * @property string $DBEngineDescription
 * @property string $DBEngineVersionDescription
 * @property list<UpgradeTarget> $ValidUpgradeTarget
 * @property list<string> $ExportableLogTypes
 * @property bool $SupportsLogExportsToCloudwatchLogs
 * @property list<string> $SupportedCACertificateIdentifiers
 * @property bool $SupportsCertificateRotationWithoutRestart
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
     *     ValidUpgradeTarget?: list<UpgradeTarget>,
     *     ExportableLogTypes?: list<string>,
     *     SupportsLogExportsToCloudwatchLogs?: bool,
     *     SupportedCACertificateIdentifiers?: list<string>,
     *     SupportsCertificateRotationWithoutRestart?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
