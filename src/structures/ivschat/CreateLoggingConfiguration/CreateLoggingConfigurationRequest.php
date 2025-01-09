<?php

namespace Sunaoka\Aws\Structures\ivschat\CreateLoggingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property Shapes\DestinationConfiguration $destinationConfiguration
 * @property array<string, string> $tags
 */
class CreateLoggingConfigurationRequest extends Request
{
    /**
     * @param array{
     *     name?: string,
     *     destinationConfiguration: Shapes\DestinationConfiguration,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
