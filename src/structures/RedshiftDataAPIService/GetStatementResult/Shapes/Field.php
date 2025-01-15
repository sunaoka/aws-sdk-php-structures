<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\GetStatementResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Psr\Http\Message\StreamInterface|null $blobValue
 * @property bool|null $booleanValue
 * @property double|null $doubleValue
 * @property bool|null $isNull
 * @property int|null $longValue
 * @property string|null $stringValue
 */
class Field extends Shape
{
    /**
     * @param array{
     *     blobValue?: \Psr\Http\Message\StreamInterface|null,
     *     booleanValue?: bool|null,
     *     doubleValue?: double|null,
     *     isNull?: bool|null,
     *     longValue?: int|null,
     *     stringValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
