<?php

namespace Sunaoka\Aws\Structures\WorkDocs\GetFolder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AuthenticationToken
 * @property string $FolderId
 * @property bool $IncludeCustomMetadata
 */
class GetFolderRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string,
     *     FolderId: string,
     *     IncludeCustomMetadata?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
