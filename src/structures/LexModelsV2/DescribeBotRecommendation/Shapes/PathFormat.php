<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $objectPrefixes
 */
class PathFormat extends Shape
{
    /**
     * @param array{objectPrefixes?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
