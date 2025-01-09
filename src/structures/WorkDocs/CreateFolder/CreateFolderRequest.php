<?php

namespace Sunaoka\Aws\Structures\WorkDocs\CreateFolder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AuthenticationToken
 * @property string $Name
 * @property string $ParentFolderId
 */
class CreateFolderRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string,
     *     Name?: string,
     *     ParentFolderId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
