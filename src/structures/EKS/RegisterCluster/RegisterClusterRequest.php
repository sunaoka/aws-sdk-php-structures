<?php

namespace Sunaoka\Aws\Structures\EKS\RegisterCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property Shapes\ConnectorConfigRequest $connectorConfig
 * @property string|null $clientRequestToken
 * @property array<string, string>|null $tags
 */
class RegisterClusterRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     connectorConfig: Shapes\ConnectorConfigRequest,
     *     clientRequestToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
