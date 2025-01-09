<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateIntegrationWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AppflowIntegration $AppflowIntegration
 */
class IntegrationConfig extends Shape
{
    /**
     * @param array{AppflowIntegration?: AppflowIntegration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
