<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateWorkspaceImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property string $WorkspaceId
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateWorkspaceImageRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description: string,
     *     WorkspaceId: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
