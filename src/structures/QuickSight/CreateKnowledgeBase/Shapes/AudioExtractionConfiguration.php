<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $audioExtractionStatus
 */
class AudioExtractionConfiguration extends Shape
{
    /**
     * @param array{audioExtractionStatus: 'ENABLED'|'DISABLED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
