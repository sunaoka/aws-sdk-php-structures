<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\BatchIsAuthorized\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $boolean
 * @property EntityIdentifier $entityIdentifier
 * @property int $long
 * @property string $string
 * @property list<AttributeValue> $set
 * @property array<string, AttributeValue> $record
 * @property string $ipaddr
 * @property string $decimal
 */
class AttributeValue extends Shape
{
    /**
     * @param array{
     *     boolean?: bool,
     *     entityIdentifier?: EntityIdentifier,
     *     long?: int,
     *     string?: string,
     *     set?: list<AttributeValue>,
     *     record?: array<string, AttributeValue>,
     *     ipaddr?: string,
     *     decimal?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
