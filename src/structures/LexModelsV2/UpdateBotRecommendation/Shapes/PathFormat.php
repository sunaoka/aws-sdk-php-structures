<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateBotRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $objectPrefixes
 */
class PathFormat extends Shape
{
    /**
     * @param array{objectPrefixes?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
