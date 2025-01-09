<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CopyWorkspaceImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property string $SourceImageId
 * @property string $SourceRegion
 * @property list<Shapes\Tag> $Tags
 */
class CopyWorkspaceImageRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     SourceImageId: string,
     *     SourceRegion: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
