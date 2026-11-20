<?php

namespace Sunaoka\Aws\Structures\MarketplaceDeployment\ListDeploymentConfigurationJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fulfillmentUrl
 */
class DataAsAServiceConfigurationDetail extends Shape
{
    /**
     * @param array{fulfillmentUrl: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
