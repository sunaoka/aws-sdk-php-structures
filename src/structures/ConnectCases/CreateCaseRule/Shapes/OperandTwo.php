<?php

namespace Sunaoka\Aws\Structures\ConnectCases\CreateCaseRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $stringValue
 * @property bool|null $booleanValue
 * @property double|null $doubleValue
 * @property EmptyOperandValue|null $emptyValue
 */
class OperandTwo extends Shape
{
    /**
     * @param array{
     *     stringValue?: string|null,
     *     booleanValue?: bool|null,
     *     doubleValue?: double|null,
     *     emptyValue?: EmptyOperandValue|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
