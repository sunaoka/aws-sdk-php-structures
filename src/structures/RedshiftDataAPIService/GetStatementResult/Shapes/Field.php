<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\GetStatementResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $blobValue
 * @property bool $booleanValue
 * @property double $doubleValue
 * @property bool $isNull
 * @property int $longValue
 * @property string $stringValue
 */
class Field extends Shape
{
    /**
     * @param array{
     *     blobValue?: string,
     *     booleanValue?: bool,
     *     doubleValue?: double,
     *     isNull?: bool,
     *     longValue?: int,
     *     stringValue?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
