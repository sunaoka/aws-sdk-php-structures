<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateWorkspace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceName
 * @property string|null $workspaceDescription
 * @property Shapes\WorkspaceEncryptionConfiguration|null $encryptionConfiguration
 * @property string|null $clientToken
 */
class UpdateWorkspaceRequest extends Request
{
    /**
     * @param array{
     *     workspaceName: string,
     *     workspaceDescription?: string|null,
     *     encryptionConfiguration?: Shapes\WorkspaceEncryptionConfiguration|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
