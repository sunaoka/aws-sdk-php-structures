<?php

namespace Sunaoka\Aws\Structures\ConnectCases\CreateLayout\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LayoutSections $moreInfo
 * @property LayoutSections $topPanel
 */
class BasicLayout extends Shape
{
    /**
     * @param array{
     *     moreInfo?: LayoutSections,
     *     topPanel?: LayoutSections
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
