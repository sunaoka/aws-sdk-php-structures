<?php

namespace Sunaoka\Aws\Structures\WorkDocs\UpdateFolder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AuthenticationToken
 * @property string $FolderId
 * @property string $Name
 * @property string $ParentFolderId
 * @property 'ACTIVE'|'RESTORING'|'RECYCLING'|'RECYCLED' $ResourceState
 */
class UpdateFolderRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string,
     *     FolderId: string,
     *     Name?: string,
     *     ParentFolderId?: string,
     *     ResourceState?: 'ACTIVE'|'RESTORING'|'RECYCLING'|'RECYCLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
