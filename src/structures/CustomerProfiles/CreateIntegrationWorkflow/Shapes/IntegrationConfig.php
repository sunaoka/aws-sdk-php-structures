<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateIntegrationWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AppflowIntegration|null $AppflowIntegration
 */
class IntegrationConfig extends Shape
{
    /**
     * @param array{AppflowIntegration?: AppflowIntegration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
