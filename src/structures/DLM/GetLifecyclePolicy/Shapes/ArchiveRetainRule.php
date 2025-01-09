<?php

namespace Sunaoka\Aws\Structures\DLM\GetLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RetentionArchiveTier $RetentionArchiveTier
 */
class ArchiveRetainRule extends Shape
{
    /**
     * @param array{RetentionArchiveTier: RetentionArchiveTier} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
