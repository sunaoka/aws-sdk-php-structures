<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DeleteWorkspace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceName
 * @property string|null $clientToken
 */
class DeleteWorkspaceRequest extends Request
{
    /**
     * @param array{
     *     workspaceName: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
