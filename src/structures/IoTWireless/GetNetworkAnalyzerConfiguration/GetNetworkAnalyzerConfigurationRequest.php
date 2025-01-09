<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetNetworkAnalyzerConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationName
 */
class GetNetworkAnalyzerConfigurationRequest extends Request
{
    /**
     * @param array{ConfigurationName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
