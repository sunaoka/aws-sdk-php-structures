<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $workflowId
 */
class TemplateSource extends Shape
{
    /**
     * @param array{workflowId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
