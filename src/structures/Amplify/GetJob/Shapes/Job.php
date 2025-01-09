<?php

namespace Sunaoka\Aws\Structures\Amplify\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property JobSummary $summary
 * @property list<Step> $steps
 */
class Job extends Shape
{
    /**
     * @param array{
     *     summary: JobSummary,
     *     steps: list<Step>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
