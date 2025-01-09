<?php

namespace Sunaoka\Aws\Structures\B2bi\UpdatePartnership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property X12InterchangeControlHeaders $interchangeControlHeaders
 * @property X12FunctionalGroupHeaders $functionalGroupHeaders
 * @property X12Delimiters $delimiters
 * @property bool $validateEdi
 */
class X12OutboundEdiHeaders extends Shape
{
    /**
     * @param array{
     *     interchangeControlHeaders?: X12InterchangeControlHeaders,
     *     functionalGroupHeaders?: X12FunctionalGroupHeaders,
     *     delimiters?: X12Delimiters,
     *     validateEdi?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
