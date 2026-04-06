<?php

namespace Sunaoka\Aws\Structures\WorkspacesInstances\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkspaceInstanceId
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{WorkspaceInstanceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
