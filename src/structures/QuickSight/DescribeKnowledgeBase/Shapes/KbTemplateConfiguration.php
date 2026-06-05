<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KbTemplate|null $template
 */
class KbTemplateConfiguration extends Shape
{
    /**
     * @param array{template?: KbTemplate|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
