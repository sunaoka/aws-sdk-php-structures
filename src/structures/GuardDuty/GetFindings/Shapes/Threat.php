<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Source
 * @property list<ItemPath>|null $ItemPaths
 * @property int|null $Count
 * @property string|null $Hash
 * @property list<ItemDetails>|null $ItemDetails
 */
class Threat extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Source?: string|null,
     *     ItemPaths?: list<ItemPath>|null,
     *     Count?: int|null,
     *     Hash?: string|null,
     *     ItemDetails?: list<ItemDetails>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
