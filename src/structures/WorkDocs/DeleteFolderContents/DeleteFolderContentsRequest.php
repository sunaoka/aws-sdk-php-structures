<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DeleteFolderContents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AuthenticationToken
 * @property string $FolderId
 */
class DeleteFolderContentsRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string|null,
     *     FolderId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
