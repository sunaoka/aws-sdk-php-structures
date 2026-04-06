<?php

namespace Sunaoka\Aws\Structures\Bedrock\PutModelInvocationLoggingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\LoggingConfig $loggingConfig
 */
class PutModelInvocationLoggingConfigurationRequest extends Request
{
    /**
     * @param array{loggingConfig: Shapes\LoggingConfig} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
