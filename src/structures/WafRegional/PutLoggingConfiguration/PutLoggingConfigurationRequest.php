<?php

namespace Sunaoka\Aws\Structures\WafRegional\PutLoggingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\LoggingConfiguration $LoggingConfiguration
 */
class PutLoggingConfigurationRequest extends Request
{
    /**
     * @param array{LoggingConfiguration: Shapes\LoggingConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
