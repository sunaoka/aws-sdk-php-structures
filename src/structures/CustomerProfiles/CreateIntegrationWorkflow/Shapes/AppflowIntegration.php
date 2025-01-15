<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateIntegrationWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FlowDefinition $FlowDefinition
 * @property list<Batch>|null $Batches
 */
class AppflowIntegration extends Shape
{
    /**
     * @param array{
     *     FlowDefinition: FlowDefinition,
     *     Batches?: list<Batch>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
