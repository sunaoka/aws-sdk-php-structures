<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $workflowId
 */
class TemplateSource extends Shape
{
    /**
     * @param array{workflowId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
