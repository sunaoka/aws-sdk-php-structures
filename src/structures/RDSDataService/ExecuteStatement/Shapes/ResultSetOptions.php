<?php

namespace Sunaoka\Aws\Structures\RDSDataService\ExecuteStatement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STRING'|'DOUBLE_OR_LONG' $decimalReturnType
 * @property 'STRING'|'LONG' $longReturnType
 */
class ResultSetOptions extends Shape
{
    /**
     * @param array{
     *     decimalReturnType?: 'STRING'|'DOUBLE_OR_LONG',
     *     longReturnType?: 'STRING'|'LONG'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
