<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DeleteLoggingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $workspaceId
 */
class DeleteLoggingConfigurationRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     workspaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
