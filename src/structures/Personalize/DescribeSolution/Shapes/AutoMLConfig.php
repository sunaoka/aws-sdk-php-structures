<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeSolution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $metricName
 * @property list<string> $recipeList
 */
class AutoMLConfig extends Shape
{
    /**
     * @param array{
     *     metricName?: string,
     *     recipeList?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
