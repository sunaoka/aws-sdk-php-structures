<?php

namespace Sunaoka\Aws\Structures\PrometheusService\CreateLoggingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $logGroupArn
 * @property string $workspaceId
 */
class CreateLoggingConfigurationRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     logGroupArn: string,
     *     workspaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
