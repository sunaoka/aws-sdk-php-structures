<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NestedItemPath
 * @property string|null $Hash
 */
class ItemPath extends Shape
{
    /**
     * @param array{
     *     NestedItemPath?: string|null,
     *     Hash?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
