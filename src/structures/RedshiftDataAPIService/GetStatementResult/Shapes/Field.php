<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\GetStatementResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $isNull
 * @property bool|null $booleanValue
 * @property int|null $longValue
 * @property double|null $doubleValue
 * @property string|null $stringValue
 * @property \Psr\Http\Message\StreamInterface|null $blobValue
 */
class Field extends Shape
{
    /**
     * @param array{
     *     isNull?: bool|null,
     *     booleanValue?: bool|null,
     *     longValue?: int|null,
     *     doubleValue?: double|null,
     *     stringValue?: string|null,
     *     blobValue?: \Psr\Http\Message\StreamInterface|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
