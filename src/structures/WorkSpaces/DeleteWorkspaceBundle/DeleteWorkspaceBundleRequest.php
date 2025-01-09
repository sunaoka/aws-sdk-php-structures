<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DeleteWorkspaceBundle;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BundleId
 */
class DeleteWorkspaceBundleRequest extends Request
{
    /**
     * @param array{BundleId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
