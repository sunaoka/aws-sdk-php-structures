<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DeleteFolder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AuthenticationToken
 * @property string $FolderId
 */
class DeleteFolderRequest extends Request
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
