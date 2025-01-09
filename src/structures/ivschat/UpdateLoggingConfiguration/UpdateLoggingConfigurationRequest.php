<?php

namespace Sunaoka\Aws\Structures\ivschat\UpdateLoggingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 * @property string $name
 * @property Shapes\DestinationConfiguration $destinationConfiguration
 */
class UpdateLoggingConfigurationRequest extends Request
{
    /**
     * @param array{
     *     identifier: string,
     *     name?: string,
     *     destinationConfiguration?: Shapes\DestinationConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
