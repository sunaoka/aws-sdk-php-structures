<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $URLTemplate
 * @property 'NEW_TAB'|'NEW_WINDOW'|'SAME_TAB' $URLTarget
 */
class CustomActionURLOperation extends Shape
{
    /**
     * @param array{
     *     URLTemplate: string,
     *     URLTarget: 'NEW_TAB'|'NEW_WINDOW'|'SAME_TAB'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
