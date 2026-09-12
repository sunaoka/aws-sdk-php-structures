<?php

namespace Sunaoka\Aws\Structures\Batch\TerminateJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $job
 * @property string $code
 * @property string $message
 */
class TerminateJobsErrorDetail extends Shape
{
    /**
     * @param array{
     *     job: string,
     *     code: string,
     *     message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
