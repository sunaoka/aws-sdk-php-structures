<?php

namespace Sunaoka\Aws\Structures\WorkDocs\GetFolder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AuthenticationToken
 * @property string $FolderId
 * @property bool|null $IncludeCustomMetadata
 */
class GetFolderRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string|null,
     *     FolderId: string,
     *     IncludeCustomMetadata?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
