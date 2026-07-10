<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $imageExtractionStatus
 */
class ImageExtractionConfiguration extends Shape
{
    /**
     * @param array{imageExtractionStatus: 'ENABLED'|'DISABLED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
