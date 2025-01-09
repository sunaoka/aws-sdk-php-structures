<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<HierarchicalChunkingLevelConfiguration> $levelConfigurations
 * @property int $overlapTokens
 */
class HierarchicalChunkingConfiguration extends Shape
{
    /**
     * @param array{
     *     levelConfigurations: list<HierarchicalChunkingLevelConfiguration>,
     *     overlapTokens: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
