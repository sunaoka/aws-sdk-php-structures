<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeEngineVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Engine
 * @property string|null $EngineVersion
 * @property string|null $EnginePatchVersion
 * @property string|null $ParameterGroupFamily
 */
class EngineVersionInfo extends Shape
{
    /**
     * @param array{
     *     Engine?: string|null,
     *     EngineVersion?: string|null,
     *     EnginePatchVersion?: string|null,
     *     ParameterGroupFamily?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
