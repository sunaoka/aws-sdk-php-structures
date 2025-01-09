<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ListJobsByStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $SubmitTimeMillis
 * @property int $StartTimeMillis
 * @property int $FinishTimeMillis
 */
class Timing extends Shape
{
    /**
     * @param array{
     *     SubmitTimeMillis?: int,
     *     StartTimeMillis?: int,
     *     FinishTimeMillis?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
