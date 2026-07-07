<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListConnectorScanConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $awsConfigConnectorArn
 * @property list<string> $connectorArns
 * @property ConnectorScanConfiguration $scanConfiguration
 */
class ConnectorScanConfigurationItem extends Shape
{
    /**
     * @param array{
     *     awsConfigConnectorArn: string,
     *     connectorArns: list<string>,
     *     scanConfiguration: ConnectorScanConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
