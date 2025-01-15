<?php

namespace Sunaoka\Aws\Structures\RDSDataService\ExecuteStatement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STRING'|'DOUBLE_OR_LONG'|null $decimalReturnType
 * @property 'STRING'|'LONG'|null $longReturnType
 */
class ResultSetOptions extends Shape
{
    /**
     * @param array{
     *     decimalReturnType?: 'STRING'|'DOUBLE_OR_LONG'|null,
     *     longReturnType?: 'STRING'|'LONG'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
