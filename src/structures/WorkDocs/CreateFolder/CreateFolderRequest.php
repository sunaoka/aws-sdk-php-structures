<?php

namespace Sunaoka\Aws\Structures\WorkDocs\CreateFolder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AuthenticationToken
 * @property string|null $Name
 * @property string $ParentFolderId
 */
class CreateFolderRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string|null,
     *     Name?: string|null,
     *     ParentFolderId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
