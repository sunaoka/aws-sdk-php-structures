<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\ListEngineVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $engineType
 * @property string $engineVersion
 */
class EngineVersionsSummary extends Shape
{
    /**
     * @param array{
     *     engineType: string,
     *     engineVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
