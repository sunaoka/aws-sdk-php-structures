<?php

namespace Sunaoka\Aws\Structures\PrometheusService\UpdateLoggingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string $logGroupArn
 * @property string|null $clientToken
 */
class UpdateLoggingConfigurationRequest extends Request
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
