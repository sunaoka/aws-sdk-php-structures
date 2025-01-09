<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateSlot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $startTimeoutMs
 * @property AudioSpecification $audioSpecification
 * @property DTMFSpecification $dtmfSpecification
 */
class AudioAndDTMFInputSpecification extends Shape
{
    /**
     * @param array{
     *     startTimeoutMs: int<1, max>,
     *     audioSpecification?: AudioSpecification,
     *     dtmfSpecification?: DTMFSpecification
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
