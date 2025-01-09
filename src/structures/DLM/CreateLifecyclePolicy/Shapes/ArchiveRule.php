<?php

namespace Sunaoka\Aws\Structures\DLM\CreateLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ArchiveRetainRule $RetainRule
 */
class ArchiveRule extends Shape
{
    /**
     * @param array{RetainRule: ArchiveRetainRule} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
