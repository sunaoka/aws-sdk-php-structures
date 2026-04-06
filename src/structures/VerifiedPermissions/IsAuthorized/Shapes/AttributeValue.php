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
     *     record?: array<string, AttributeValue>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
