<?php

namespace Sunaoka\Aws\Structures\ivschat\UpdateLoggingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 * @property string|null $name
 * @property Shapes\DestinationConfiguration|null $destinationConfiguration
 */
class UpdateLoggingConfigurationRequest extends Request
{
    /**
     * @param array{
     *     identifier: string,
     *     name?: string|null,
     *     destinationConfiguration?: Shapes\DestinationConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
