<?php

namespace Sunaoka\Aws\Structures\LexRuntimeV2\RecognizeText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $positive
 * @property double|null $negative
 * @property double|null $neutral
 * @property double|null $mixed
 */
class SentimentScore extends Shape
{
    /**
     * @param array{
     *     positive?: double|null,
     *     negative?: double|null,
     *     neutral?: double|null,
     *     mixed?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
