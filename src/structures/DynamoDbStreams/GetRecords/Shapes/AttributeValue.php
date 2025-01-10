<?php

namespace Sunaoka\Aws\Structures\DynamoDbStreams\GetRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S
 * @property string $N
 * @property \Psr\Http\Message\StreamInterface $B
 * @property list<string> $SS
 * @property list<string> $NS
 * @property list<\Psr\Http\Message\StreamInterface> $BS
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
     *     B?: \Psr\Http\Message\StreamInterface,
     *     SS?: list<string>,
     *     NS?: list<string>,
     *     BS?: list<\Psr\Http\Message\StreamInterface>,
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
