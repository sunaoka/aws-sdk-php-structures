<?php

namespace Sunaoka\Aws\Structures\Batch\CancelJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $job
 * @property string $code
 * @property string $message
 */
class CancelJobsErrorDetail extends Shape
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
