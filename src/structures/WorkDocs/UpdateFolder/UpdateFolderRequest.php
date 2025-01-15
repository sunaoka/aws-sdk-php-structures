<?php

namespace Sunaoka\Aws\Structures\WorkDocs\UpdateFolder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AuthenticationToken
 * @property string $FolderId
 * @property string|null $Name
 * @property string|null $ParentFolderId
 * @property 'ACTIVE'|'RESTORING'|'RECYCLING'|'RECYCLED'|null $ResourceState
 */
class UpdateFolderRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string|null,
     *     FolderId: string,
     *     Name?: string|null,
     *     ParentFolderId?: string|null,
     *     ResourceState?: 'ACTIVE'|'RESTORING'|'RECYCLING'|'RECYCLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
