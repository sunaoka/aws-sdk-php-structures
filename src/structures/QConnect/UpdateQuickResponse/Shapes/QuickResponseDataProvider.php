<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateQuickResponse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $content
 */
class QuickResponseDataProvider extends Shape
{
    /**
     * @param array{content?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
