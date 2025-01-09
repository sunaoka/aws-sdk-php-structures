<?php

namespace Sunaoka\Aws\Structures\LexRuntimeV2\GetSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $positive
 * @property double $negative
 * @property double $neutral
 * @property double $mixed
 */
class SentimentScore extends Shape
{
    /**
     * @param array{
     *     positive?: double,
     *     negative?: double,
     *     neutral?: double,
     *     mixed?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
