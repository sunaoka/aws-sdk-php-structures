<?php

namespace Sunaoka\Aws\Structures\ivschat\CreateLoggingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $name
 * @property Shapes\DestinationConfiguration $destinationConfiguration
 * @property array<string, string>|null $tags
 */
class CreateLoggingConfigurationRequest extends Request
{
    /**
     * @param array{
     *     name?: string|null,
     *     destinationConfiguration: Shapes\DestinationConfiguration,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
