<?php

namespace Sunaoka\Aws\Structures\AppRegistry\PutConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AppRegistryConfiguration $configuration
 */
class PutConfigurationRequest extends Request
{
    /**
     * @param array{configuration: Shapes\AppRegistryConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
