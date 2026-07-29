<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateWorkspace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceName
 * @property string|null $workspaceDescription
 * @property Shapes\WorkspaceEncryptionConfiguration $encryptionConfiguration
 * @property array<string, string>|null $tags
 * @property string|null $clientToken
 */
class CreateWorkspaceRequest extends Request
{
    /**
     * @param array{
     *     workspaceName: string,
     *     workspaceDescription?: string|null,
     *     encryptionConfiguration: Shapes\WorkspaceEncryptionConfiguration,
     *     tags?: array<string, string>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
