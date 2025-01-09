<?php

namespace Sunaoka\Aws\Structures\ConnectCases\ListLayouts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $layoutArn
 * @property string $layoutId
 * @property string $name
 */
class LayoutSummary extends Shape
{
    /**
     * @param array{
     *     layoutArn: string,
     *     layoutId: string,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
