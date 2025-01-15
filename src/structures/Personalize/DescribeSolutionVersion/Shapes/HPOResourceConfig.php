<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeSolutionVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $maxNumberOfTrainingJobs
 * @property string|null $maxParallelTrainingJobs
 */
class HPOResourceConfig extends Shape
{
    /**
     * @param array{
     *     maxNumberOfTrainingJobs?: string|null,
     *     maxParallelTrainingJobs?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
