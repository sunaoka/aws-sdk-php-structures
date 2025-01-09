<?php

namespace Sunaoka\Aws\Structures\WorkDocs\UpdateDocument;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AuthenticationToken
 * @property string $DocumentId
 * @property string $Name
 * @property string $ParentFolderId
 * @property 'ACTIVE'|'RESTORING'|'RECYCLING'|'RECYCLED' $ResourceState
 */
class UpdateDocumentRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string,
     *     DocumentId: string,
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
