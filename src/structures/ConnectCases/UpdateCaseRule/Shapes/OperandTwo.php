<?php

namespace Sunaoka\Aws\Structures\ConnectCases\UpdateCaseRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $booleanValue
 * @property double|null $doubleValue
 * @property EmptyOperandValue|null $emptyValue
 * @property string|null $stringValue
 */
class OperandTwo extends Shape
{
    /**
     * @param array{
     *     booleanValue?: bool|null,
     *     doubleValue?: double|null,
     *     emptyValue?: EmptyOperandValue|null,
     *     stringValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
