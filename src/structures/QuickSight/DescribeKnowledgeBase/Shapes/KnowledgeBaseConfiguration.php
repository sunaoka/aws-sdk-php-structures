<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KbTemplateConfiguration|null $templateConfiguration
 */
class KnowledgeBaseConfiguration extends Shape
{
    /**
     * @param array{templateConfiguration?: KbTemplateConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
