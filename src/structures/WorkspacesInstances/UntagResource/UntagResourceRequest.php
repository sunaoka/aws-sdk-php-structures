<?php

namespace Sunaoka\Aws\Structures\WorkspacesInstances\UntagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkspaceInstanceId
 * @property list<string> $TagKeys
 */
class UntagResourceRequest extends Request
{
    /**
     * @param array{
     *     WorkspaceInstanceId: string,
     *     TagKeys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
