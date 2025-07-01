<?php

namespace Sunaoka\Aws\Structures\B2bi\GetPartnership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property X12InterchangeControlHeaders|null $interchangeControlHeaders
 * @property X12FunctionalGroupHeaders|null $functionalGroupHeaders
 * @property X12Delimiters|null $delimiters
 * @property bool|null $validateEdi
 * @property X12ControlNumbers|null $controlNumbers
 * @property 'HHMM'|'HHMMSS'|'HHMMSSDD'|null $gs05TimeFormat
 */
class X12OutboundEdiHeaders extends Shape
{
    /**
     * @param array{
     *     interchangeControlHeaders?: X12InterchangeControlHeaders|null,
     *     functionalGroupHeaders?: X12FunctionalGroupHeaders|null,
     *     delimiters?: X12Delimiters|null,
     *     validateEdi?: bool|null,
     *     controlNumbers?: X12ControlNumbers|null,
     *     gs05TimeFormat?: 'HHMM'|'HHMMSS'|'HHMMSSDD'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
