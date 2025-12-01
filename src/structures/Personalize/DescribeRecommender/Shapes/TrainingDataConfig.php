<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeRecommender\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, list<string>>|null $excludedDatasetColumns
 * @property array<string, list<string>>|null $includedDatasetColumns
 */
class TrainingDataConfig extends Shape
{
    /**
     * @param array{
     *     excludedDatasetColumns?: array<string, list<string>>|null,
     *     includedDatasetColumns?: array<string, list<string>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
