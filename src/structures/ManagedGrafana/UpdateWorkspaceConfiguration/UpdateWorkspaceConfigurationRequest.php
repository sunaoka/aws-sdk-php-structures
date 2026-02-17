<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\UpdateWorkspaceConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $configuration
 * @property string $workspaceId
 * @property string|null $grafanaVersion
 */
class UpdateWorkspaceConfigurationRequest extends Request
{
    /**
     * @param array{
     *     configuration: string,
     *     workspaceId: string,
     *     grafanaVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
