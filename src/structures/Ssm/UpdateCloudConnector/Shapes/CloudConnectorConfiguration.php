<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateCloudConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AzureConfiguration|null $AzureConfiguration
 */
class CloudConnectorConfiguration extends Shape
{
    /**
     * @param array{AzureConfiguration?: AzureConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
