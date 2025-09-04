<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\IsAuthorized\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $boolean
 * @property EntityIdentifier|null $entityIdentifier
 * @property int|null $long
 * @property string|null $string
 * @property list<AttributeValue>|null $set
 * @property array<string, AttributeValue>|null $record
 * @property string|null $ipaddr
 * @property string|null $decimal
 * @property string|null $datetime
 * @property string|null $duration
 */
class AttributeValue extends Shape
{
    /**
     * @param array{
     *     boolean?: bool|null,
     *     entityIdentifier?: EntityIdentifier|null,
     *     long?: int|null,
     *     string?: string|null,
     *     set?: list<AttributeValue>|null,
     *     record?: array<string, AttributeValue>|null,
     *     ipaddr?: string|null,
     *     decimal?: string|null,
     *     datetime?: string|null,
     *     duration?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
