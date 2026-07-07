<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $arn
 * @property ConnectorConfiguration $connectorConfiguration
 * @property \Aws\Api\DateTimeResult $createdTime
 */
class Connector extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     arn: string,
     *     connectorConfiguration: ConnectorConfiguration,
     *     createdTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
