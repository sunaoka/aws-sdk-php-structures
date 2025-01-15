<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $CreationDateTime
 * @property \Aws\Api\DateTimeResult|null $StartDateTime
 * @property \Aws\Api\DateTimeResult|null $EndDateTime
 */
class StepTimeline extends Shape
{
    /**
     * @param array{
     *     CreationDateTime?: \Aws\Api\DateTimeResult|null,
     *     StartDateTime?: \Aws\Api\DateTimeResult|null,
     *     EndDateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
