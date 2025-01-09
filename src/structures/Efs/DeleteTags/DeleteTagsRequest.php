<?php

namespace Sunaoka\Aws\Structures\Efs\DeleteTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FileSystemId
 * @property list<string> $TagKeys
 */
class DeleteTagsRequest extends Request
{
    /**
     * @param array{
     *     FileSystemId: string,
     *     TagKeys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
