<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\UpdateWorkspaceConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $configuration
 * @property string|null $grafanaVersion
 * @property string $workspaceId
 */
class UpdateWorkspaceConfigurationRequest extends Request
{
    /**
     * @param array{
     *     configuration: string,
     *     grafanaVersion?: string|null,
     *     workspaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
