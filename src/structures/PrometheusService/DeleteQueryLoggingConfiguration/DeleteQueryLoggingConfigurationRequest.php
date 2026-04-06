<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DeleteQueryLoggingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string|null $clientToken
 */
class DeleteQueryLoggingConfigurationRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
