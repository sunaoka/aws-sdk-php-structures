<?php

namespace Sunaoka\Aws\Structures\MarketplaceDeployment\ListDeploymentConfigurationJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataAsAServiceConfigurationDetail|null $dataAsAService
 */
class DeploymentConfigurationDetail extends Shape
{
    /**
     * @param array{dataAsAService?: DataAsAServiceConfigurationDetail|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
