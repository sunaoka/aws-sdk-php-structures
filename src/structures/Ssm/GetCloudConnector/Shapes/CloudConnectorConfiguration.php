<?php

namespace Sunaoka\Aws\Structures\Ssm\GetCloudConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AzureConfiguration|null $AzureConfiguration
 * @property GcpConfiguration|null $GcpConfiguration
 */
class CloudConnectorConfiguration extends Shape
{
    /**
     * @param array{
     *     AzureConfiguration?: AzureConfiguration|null,
     *     GcpConfiguration?: GcpConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
