<?php

namespace Sunaoka\Aws\Structures\Ssm\ListInventoryEntries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property list<string> $Values
 * @property 'Equal'|'NotEqual'|'BeginWith'|'LessThan'|'GreaterThan'|'Exists'|null $Type
 */
class InventoryFilter extends Shape
{
    /**
     * @param array{
     *     Key: string,
     *     Values: list<string>,
     *     Type?: 'Equal'|'NotEqual'|'BeginWith'|'LessThan'|'GreaterThan'|'Exists'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
