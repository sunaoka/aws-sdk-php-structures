<?php

namespace Sunaoka\Aws\Structures\EntityResolution\UpdateMatchingWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $enableTransitiveMatching
 */
class MatchingConfig extends Shape
{
    /**
     * @param array{enableTransitiveMatching?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
