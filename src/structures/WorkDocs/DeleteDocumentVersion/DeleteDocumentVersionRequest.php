<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DeleteDocumentVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AuthenticationToken
 * @property string $DocumentId
 * @property string $VersionId
 * @property bool $DeletePriorVersions
 */
class DeleteDocumentVersionRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string,
     *     DocumentId: string,
     *     VersionId: string,
     *     DeletePriorVersions: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
