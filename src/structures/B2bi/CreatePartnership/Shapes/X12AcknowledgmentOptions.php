<?php

namespace Sunaoka\Aws\Structures\B2bi\CreatePartnership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DO_NOT_GENERATE'|'GENERATE_ALL_SEGMENTS'|'GENERATE_WITHOUT_TRANSACTION_SET_RESPONSE_LOOP' $functionalAcknowledgment
 * @property 'DO_NOT_GENERATE'|'GENERATE_ALL_SEGMENTS' $technicalAcknowledgment
 */
class X12AcknowledgmentOptions extends Shape
{
    /**
     * @param array{
     *     functionalAcknowledgment: 'DO_NOT_GENERATE'|'GENERATE_ALL_SEGMENTS'|'GENERATE_WITHOUT_TRANSACTION_SET_RESPONSE_LOOP',
     *     technicalAcknowledgment: 'DO_NOT_GENERATE'|'GENERATE_ALL_SEGMENTS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
