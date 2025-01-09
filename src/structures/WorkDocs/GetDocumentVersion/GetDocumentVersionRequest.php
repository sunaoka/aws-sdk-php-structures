<?php

namespace Sunaoka\Aws\Structures\WorkDocs\GetDocumentVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AuthenticationToken
 * @property string $DocumentId
 * @property string $VersionId
 * @property string $Fields
 * @property bool $IncludeCustomMetadata
 */
class GetDocumentVersionRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string,
     *     DocumentId: string,
     *     VersionId: string,
     *     Fields?: string,
     *     IncludeCustomMetadata?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
