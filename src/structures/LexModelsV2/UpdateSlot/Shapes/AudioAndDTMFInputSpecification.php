<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateSlot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $startTimeoutMs
 * @property AudioSpecification $audioSpecification
 * @property DTMFSpecification $dtmfSpecification
 */
class AudioAndDTMFInputSpecification extends Shape
{
    /**
     * @param array{
     *     startTimeoutMs: int,
     *     audioSpecification?: AudioSpecification,
     *     dtmfSpecification?: DTMFSpecification
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
