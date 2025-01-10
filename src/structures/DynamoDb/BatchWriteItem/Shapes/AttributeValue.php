<?php

namespace Sunaoka\Aws\Structures\DynamoDb\BatchWriteItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S
 * @property string $N
 * @property string|resource|\Psr\Http\Message\StreamInterface $B
 * @property list<string> $SS
 * @property list<string> $NS
 * @property list<string|resource|\Psr\Http\Message\StreamInterface> $BS
 * @property array<string, AttributeValue> $M
 * @property list<AttributeValue> $L
 * @property bool $NULL
 * @property bool $BOOL
 */
class AttributeValue extends Shape
{
    /**
     * @param array{
     *     S?: string,
     *     N?: string,
     *     B?: string|resource|\Psr\Http\Message\StreamInterface,
     *     SS?: list<string>,
     *     NS?: list<string>,
     *     BS?: list<string|resource|\Psr\Http\Message\StreamInterface>,
     *     M?: array<string, AttributeValue>,
     *     L?: list<AttributeValue>,
     *     NULL?: bool,
     *     BOOL?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
