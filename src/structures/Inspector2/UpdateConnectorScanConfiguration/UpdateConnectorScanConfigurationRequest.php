<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateConnectorScanConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $awsConfigConnectorArn
 * @property Shapes\ConnectorScanConfiguration $scanConfiguration
 */
class UpdateConnectorScanConfigurationRequest extends Request
{
    /**
     * @param array{
     *     awsConfigConnectorArn: string,
     *     scanConfiguration: Shapes\ConnectorScanConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
