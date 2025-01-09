<?php

namespace Sunaoka\Aws\Structures\Neptune\DescribeDBEngineVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Engine
 * @property string $EngineVersion
 * @property string $Description
 * @property bool $AutoUpgrade
 * @property bool $IsMajorVersionUpgrade
 * @property bool $SupportsGlobalDatabases
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
     *     SupportsGlobalDatabases?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
