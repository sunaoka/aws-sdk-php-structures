<?php

namespace Sunaoka\Aws\Structures\Personalize\CreateSolution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $maxNumberOfTrainingJobs
 * @property string $maxParallelTrainingJobs
 */
class HPOResourceConfig extends Shape
{
    /**
     * @param array{
     *     maxNumberOfTrainingJobs?: string,
     *     maxParallelTrainingJobs?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
