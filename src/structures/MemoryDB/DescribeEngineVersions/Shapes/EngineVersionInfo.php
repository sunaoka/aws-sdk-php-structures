<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeEngineVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Engine
 * @property string $EngineVersion
 * @property string $EnginePatchVersion
 * @property string $ParameterGroupFamily
 */
class EngineVersionInfo extends Shape
{
    /**
     * @param array{
     *     Engine?: string,
     *     EngineVersion?: string,
     *     EnginePatchVersion?: string,
     *     ParameterGroupFamily?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
