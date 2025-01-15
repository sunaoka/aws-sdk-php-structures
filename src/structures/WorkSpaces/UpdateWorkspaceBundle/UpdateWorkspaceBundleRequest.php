<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\UpdateWorkspaceBundle;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $BundleId
 * @property string|null $ImageId
 */
class UpdateWorkspaceBundleRequest extends Request
{
    /**
     * @param array{
     *     BundleId?: string|null,
     *     ImageId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
