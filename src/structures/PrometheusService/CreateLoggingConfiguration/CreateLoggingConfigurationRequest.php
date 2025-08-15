<?php

namespace Sunaoka\Aws\Structures\PrometheusService\CreateLoggingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string $logGroupArn
 * @property string|null $clientToken
 */
class CreateLoggingConfigurationRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     logGroupArn: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
