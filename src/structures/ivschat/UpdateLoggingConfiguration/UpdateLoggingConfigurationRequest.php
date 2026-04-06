<?php

namespace Sunaoka\Aws\Structures\ivschat\UpdateLoggingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DestinationConfiguration|null $destinationConfiguration
 * @property string $identifier
 * @property string|null $name
 */
class UpdateLoggingConfigurationRequest extends Request
{
    /**
     * @param array{
     *     destinationConfiguration?: Shapes\DestinationConfiguration|null,
     *     identifier: string,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
