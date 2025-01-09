<?php

namespace Sunaoka\Aws\Structures\ivschat\GetLoggingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 */
class GetLoggingConfigurationRequest extends Request
{
    /**
     * @param array{identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
