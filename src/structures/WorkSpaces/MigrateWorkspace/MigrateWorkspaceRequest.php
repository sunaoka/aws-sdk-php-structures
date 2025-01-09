<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\MigrateWorkspace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceWorkspaceId
 * @property string $BundleId
 */
class MigrateWorkspaceRequest extends Request
{
    /**
     * @param array{
     *     SourceWorkspaceId: string,
     *     BundleId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
