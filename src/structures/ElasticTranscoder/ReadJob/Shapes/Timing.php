<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ReadJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $SubmitTimeMillis
 * @property int|null $StartTimeMillis
 * @property int|null $FinishTimeMillis
 */
class Timing extends Shape
{
    /**
     * @param array{
     *     SubmitTimeMillis?: int|null,
     *     StartTimeMillis?: int|null,
     *     FinishTimeMillis?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
