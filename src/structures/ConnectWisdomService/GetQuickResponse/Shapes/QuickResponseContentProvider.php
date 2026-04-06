<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\GetQuickResponse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $content
 */
class QuickResponseContentProvider extends Shape
{
    /**
     * @param array{content?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
