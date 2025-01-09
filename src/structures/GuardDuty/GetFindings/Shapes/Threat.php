<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Source
 * @property list<ItemPath> $ItemPaths
 */
class Threat extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Source?: string,
     *     ItemPaths?: list<ItemPath>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
