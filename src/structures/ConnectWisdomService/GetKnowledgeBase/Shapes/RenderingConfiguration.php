<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\GetKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $templateUri
 */
class RenderingConfiguration extends Shape
{
    /**
     * @param array{templateUri?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
