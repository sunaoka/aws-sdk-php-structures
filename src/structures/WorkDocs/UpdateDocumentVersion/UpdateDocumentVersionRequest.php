<?php

namespace Sunaoka\Aws\Structures\WorkDocs\UpdateDocumentVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AuthenticationToken
 * @property string $DocumentId
 * @property string $VersionId
 * @property 'ACTIVE'|null $VersionStatus
 */
class UpdateDocumentVersionRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string|null,
     *     DocumentId: string,
     *     VersionId: string,
     *     VersionStatus?: 'ACTIVE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
