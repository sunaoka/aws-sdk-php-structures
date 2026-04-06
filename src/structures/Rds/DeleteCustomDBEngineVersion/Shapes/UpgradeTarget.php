<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteCustomDBEngineVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Engine
 * @property string|null $EngineVersion
 * @property string|null $Description
 * @property bool|null $AutoUpgrade
 * @property bool|null $IsMajorVersionUpgrade
 * @property list<string>|null $SupportedEngineModes
 * @property bool|null $SupportsParallelQuery
 * @property bool|null $SupportsGlobalDatabases
 * @property bool|null $SupportsBabelfish
 * @property bool|null $SupportsLimitlessDatabase
 * @property bool|null $SupportsLocalWriteForwarding
 * @property bool|null $SupportsIntegrations
 */
class UpgradeTarget extends Shape
{
    /**
     * @param array{
     *     Engine?: string|null,
     *     EngineVersion?: string|null,
     *     Description?: string|null,
     *     AutoUpgrade?: bool|null,
     *     IsMajorVersionUpgrade?: bool|null,
     *     SupportedEngineModes?: list<string>|null,
     *     SupportsParallelQuery?: bool|null,
     *     SupportsGlobalDatabases?: bool|null,
     *     SupportsBabelfish?: bool|null,
     *     SupportsLimitlessDatabase?: bool|null,
     *     SupportsLocalWriteForwarding?: bool|null,
     *     SupportsIntegrations?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
