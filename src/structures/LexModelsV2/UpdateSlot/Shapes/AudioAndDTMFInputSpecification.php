<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateSlot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $startTimeoutMs
 * @property AudioSpecification|null $audioSpecification
 * @property DTMFSpecification|null $dtmfSpecification
 */
class AudioAndDTMFInputSpecification extends Shape
{
    /**
     * @param array{
     *     startTimeoutMs: int<1, max>,
     *     audioSpecification?: AudioSpecification|null,
     *     dtmfSpecification?: DTMFSpecification|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
