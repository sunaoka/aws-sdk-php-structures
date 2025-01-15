<?php

namespace Sunaoka\Aws\Structures\WorkDocs\UpdateDocument;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AuthenticationToken
 * @property string $DocumentId
 * @property string|null $Name
 * @property string|null $ParentFolderId
 * @property 'ACTIVE'|'RESTORING'|'RECYCLING'|'RECYCLED'|null $ResourceState
 */
class UpdateDocumentRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string|null,
     *     DocumentId: string,
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
