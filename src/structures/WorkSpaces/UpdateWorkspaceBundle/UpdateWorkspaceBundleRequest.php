<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\UpdateWorkspaceBundle;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BundleId
 * @property string $ImageId
 */
class UpdateWorkspaceBundleRequest extends Request
{
    /**
     * @param array{
     *     BundleId?: string,
     *     ImageId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
