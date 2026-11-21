<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\ListFulfillmentOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SaasCloudFormationDeploymentTemplate|null $cloudFormationDeploymentTemplate
 */
class SaasDeploymentTemplate extends Shape
{
    /**
     * @param array{cloudFormationDeploymentTemplate?: SaasCloudFormationDeploymentTemplate|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
