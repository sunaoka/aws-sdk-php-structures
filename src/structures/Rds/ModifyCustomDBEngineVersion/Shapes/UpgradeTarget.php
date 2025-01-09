<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyCustomDBEngineVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Engine
 * @property string $EngineVersion
 * @property string $Description
 * @property bool $AutoUpgrade
 * @property bool $IsMajorVersionUpgrade
 * @property list<string> $SupportedEngineModes
 * @property bool $SupportsParallelQuery
 * @property bool $SupportsGlobalDatabases
 * @property bool $SupportsBabelfish
 * @property bool $SupportsLimitlessDatabase
 * @property bool $SupportsLocalWriteForwarding
 * @property bool $SupportsIntegrations
 */
class UpgradeTarget extends Shape
{
    /**
     * @param array{
     *     Engine?: string,
     *     EngineVersion?: string,
     *     Description?: string,
     *     AutoUpgrade?: bool,
     *     IsMajorVersionUpgrade?: bool,
     *     SupportedEngineModes?: list<string>,
     *     SupportsParallelQuery?: bool,
     *     SupportsGlobalDatabases?: bool,
     *     SupportsBabelfish?: bool,
     *     SupportsLimitlessDatabase?: bool,
     *     SupportsLocalWriteForwarding?: bool,
     *     SupportsIntegrations?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
