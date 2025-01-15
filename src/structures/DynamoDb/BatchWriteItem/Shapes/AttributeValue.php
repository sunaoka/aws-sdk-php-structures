<?php

namespace Sunaoka\Aws\Structures\DynamoDb\BatchWriteItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $S
 * @property string|null $N
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $B
 * @property list<string>|null $SS
 * @property list<string>|null $NS
 * @property list<string|resource|\Psr\Http\Message\StreamInterface>|null $BS
 * @property array<string, AttributeValue>|null $M
 * @property list<AttributeValue>|null $L
 * @property bool|null $NULL
 * @property bool|null $BOOL
 */
class AttributeValue extends Shape
{
    /**
     * @param array{
     *     S?: string|null,
     *     N?: string|null,
     *     B?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     SS?: list<string>|null,
     *     NS?: list<string>|null,
     *     BS?: list<string|resource|\Psr\Http\Message\StreamInterface>|null,
     *     M?: array<string, AttributeValue>|null,
     *     L?: list<AttributeValue>|null,
     *     NULL?: bool|null,
     *     BOOL?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
