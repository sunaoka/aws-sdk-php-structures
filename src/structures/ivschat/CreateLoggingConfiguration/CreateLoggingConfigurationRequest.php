<?php

namespace Sunaoka\Aws\Structures\ivschat\CreateLoggingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DestinationConfiguration $destinationConfiguration
 * @property string|null $name
 * @property array<string, string>|null $tags
 */
class CreateLoggingConfigurationRequest extends Request
{
    /**
     * @param array{
     *     destinationConfiguration: Shapes\DestinationConfiguration,
     *     name?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
