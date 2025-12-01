<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeBatchInferenceJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $itemExplorationConfig
 * @property array<'POPULARITY'|'FRESHNESS', double>|null $rankingInfluence
 */
class BatchInferenceJobConfig extends Shape
{
    /**
     * @param array{
     *     itemExplorationConfig?: array<string, string>|null,
     *     rankingInfluence?: array<'POPULARITY'|'FRESHNESS', double>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
