<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $integrationName
 */
class GetIntegrationRequest extends Request
{
    /**
     * @param array{integrationName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
