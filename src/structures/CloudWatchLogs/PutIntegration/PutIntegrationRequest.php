<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $integrationName
 * @property Shapes\ResourceConfig $resourceConfig
 * @property 'OPENSEARCH' $integrationType
 */
class PutIntegrationRequest extends Request
{
    /**
     * @param array{
     *     integrationName: string,
     *     resourceConfig: Shapes\ResourceConfig,
     *     integrationType: 'OPENSEARCH'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
