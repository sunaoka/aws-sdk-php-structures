<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Source
 * @property list<ItemPath>|null $ItemPaths
 */
class Threat extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Source?: string|null,
     *     ItemPaths?: list<ItemPath>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
