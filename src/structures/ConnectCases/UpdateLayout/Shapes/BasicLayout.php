<?php

namespace Sunaoka\Aws\Structures\ConnectCases\UpdateLayout\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LayoutSections|null $moreInfo
 * @property LayoutSections|null $topPanel
 */
class BasicLayout extends Shape
{
    /**
     * @param array{
     *     moreInfo?: LayoutSections|null,
     *     topPanel?: LayoutSections|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
