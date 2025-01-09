<?php

namespace Sunaoka\Aws\Structures\Efs\CreateTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FileSystemId
 * @property list<Shapes\Tag> $Tags
 */
class CreateTagsRequest extends Request
{
    /**
     * @param array{
     *     FileSystemId: string,
     *     Tags: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
