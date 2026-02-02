<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property 'ELEMENT'|'GROUP' $Type
 */
class SheetLayoutGroupMember extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Type: 'ELEMENT'|'GROUP'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
