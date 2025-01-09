<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeSolutionVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, list<string>> $excludedDatasetColumns
 */
class TrainingDataConfig extends Shape
{
    /**
     * @param array{excludedDatasetColumns?: array<string, list<string>>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
