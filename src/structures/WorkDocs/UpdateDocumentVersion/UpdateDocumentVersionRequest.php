<?php

namespace Sunaoka\Aws\Structures\WorkDocs\UpdateDocumentVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AuthenticationToken
 * @property string $DocumentId
 * @property string $VersionId
 * @property 'ACTIVE' $VersionStatus
 */
class UpdateDocumentVersionRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string,
     *     DocumentId: string,
     *     VersionId: string,
     *     VersionStatus?: 'ACTIVE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
