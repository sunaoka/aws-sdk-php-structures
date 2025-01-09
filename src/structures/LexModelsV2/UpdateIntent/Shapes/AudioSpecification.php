<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $maxLengthMs
 * @property int<1, max> $endTimeoutMs
 */
class AudioSpecification extends Shape
{
    /**
     * @param array{
     *     maxLengthMs: int<1, max>,
     *     endTimeoutMs: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
