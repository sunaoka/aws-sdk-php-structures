<?php

namespace Sunaoka\Aws\Structures\ConnectCases\UpdateLayout\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LayoutSections|null $topPanel
 * @property LayoutSections|null $moreInfo
 */
class BasicLayout extends Shape
{
    /**
     * @param array{
     *     topPanel?: LayoutSections|null,
     *     moreInfo?: LayoutSections|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
