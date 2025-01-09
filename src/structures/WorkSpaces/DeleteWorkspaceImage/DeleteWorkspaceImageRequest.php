<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DeleteWorkspaceImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ImageId
 */
class DeleteWorkspaceImageRequest extends Request
{
    /**
     * @param array{ImageId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
