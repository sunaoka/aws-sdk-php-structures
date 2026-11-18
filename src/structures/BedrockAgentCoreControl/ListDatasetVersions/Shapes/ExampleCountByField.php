<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListDatasetVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $turns
 * @property int $input
 * @property int $actorProfile
 */
class ExampleCountByField extends Shape
{
    /**
     * @param array{
     *     turns: int,
     *     input: int,
     *     actorProfile: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
