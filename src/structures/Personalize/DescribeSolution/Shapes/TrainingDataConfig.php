<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeSolution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, list<string>>|null $excludedDatasetColumns
 */
class TrainingDataConfig extends Shape
{
    /**
     * @param array{excludedDatasetColumns?: array<string, list<string>>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
