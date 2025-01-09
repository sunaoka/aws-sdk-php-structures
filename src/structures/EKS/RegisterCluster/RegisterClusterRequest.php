<?php

namespace Sunaoka\Aws\Structures\EKS\RegisterCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property Shapes\ConnectorConfigRequest $connectorConfig
 * @property string $clientRequestToken
 * @property array<string, string> $tags
 */
class RegisterClusterRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     connectorConfig: Shapes\ConnectorConfigRequest,
     *     clientRequestToken?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
