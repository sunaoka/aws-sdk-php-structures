<?php

namespace Sunaoka\Aws\Structures\PrometheusService\CreateQueryLoggingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property list<Shapes\LoggingDestination> $destinations
 * @property string|null $clientToken
 */
class CreateQueryLoggingConfigurationRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     destinations: list<Shapes\LoggingDestination>,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
