<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateSlot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $maxLengthMs
 * @property int $endTimeoutMs
 */
class AudioSpecification extends Shape
{
    /**
     * @param array{
     *     maxLengthMs: int,
     *     endTimeoutMs: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
