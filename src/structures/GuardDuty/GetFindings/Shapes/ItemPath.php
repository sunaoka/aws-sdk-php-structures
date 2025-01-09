<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NestedItemPath
 * @property string $Hash
 */
class ItemPath extends Shape
{
    /**
     * @param array{
     *     NestedItemPath?: string,
     *     Hash?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
