<?php

namespace Sunaoka\Aws\Structures\Neptune\DescribeDBEngineVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Engine
 * @property string|null $EngineVersion
 * @property string|null $Description
 * @property bool|null $AutoUpgrade
 * @property bool|null $IsMajorVersionUpgrade
 * @property bool|null $SupportsGlobalDatabases
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
     *     SupportsGlobalDatabases?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
