<?php

namespace Sunaoka\Aws\Structures\Iot\CreateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FAILED'|'TIMED_OUT'|'ALL' $failureType
 * @property int $numberOfRetries
 */
class RetryCriteria extends Shape
{
    /**
     * @param array{
     *     failureType: 'FAILED'|'TIMED_OUT'|'ALL',
     *     numberOfRetries: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
