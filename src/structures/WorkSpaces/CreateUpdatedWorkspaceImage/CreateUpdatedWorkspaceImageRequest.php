<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateUpdatedWorkspaceImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property string $SourceImageId
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateUpdatedWorkspaceImageRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description: string,
     *     SourceImageId: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
