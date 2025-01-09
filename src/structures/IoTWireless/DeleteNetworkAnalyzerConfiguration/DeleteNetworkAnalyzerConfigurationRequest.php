<?php

namespace Sunaoka\Aws\Structures\IoTWireless\DeleteNetworkAnalyzerConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationName
 */
class DeleteNetworkAnalyzerConfigurationRequest extends Request
{
    /**
     * @param array{ConfigurationName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
