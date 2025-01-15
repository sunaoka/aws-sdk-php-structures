<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeSolutionVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $metricName
 * @property list<string>|null $recipeList
 */
class AutoMLConfig extends Shape
{
    /**
     * @param array{
     *     metricName?: string|null,
     *     recipeList?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
