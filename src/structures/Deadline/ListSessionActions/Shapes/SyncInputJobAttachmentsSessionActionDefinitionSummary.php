<?php

namespace Sunaoka\Aws\Structures\Deadline\ListSessionActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $stepId
 */
class SyncInputJobAttachmentsSessionActionDefinitionSummary extends Shape
{
    /**
     * @param array{stepId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
