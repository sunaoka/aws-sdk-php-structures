<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $templateUri
 */
class RenderingConfiguration extends Shape
{
    /**
     * @param array{templateUri?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
