<?php

namespace Sunaoka\Aws\Structures\DocDB\DescribeDBEngineVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Engine
 * @property string $EngineVersion
 * @property string $Description
 * @property bool $AutoUpgrade
 * @property bool $IsMajorVersionUpgrade
 */
class UpgradeTarget extends Shape
{
    /**
     * @param array{
     *     Engine?: string,
     *     EngineVersion?: string,
     *     Description?: string,
     *     AutoUpgrade?: bool,
     *     IsMajorVersionUpgrade?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
