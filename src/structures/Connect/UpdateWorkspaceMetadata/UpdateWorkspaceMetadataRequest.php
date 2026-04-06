<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateWorkspaceMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $WorkspaceId
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $Title
 */
class UpdateWorkspaceMetadataRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     WorkspaceId: string,
     *     Name?: string|null,
     *     Description?: string|null,
     *     Title?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
