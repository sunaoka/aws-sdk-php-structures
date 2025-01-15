<?php

namespace Sunaoka\Aws\Structures\WorkDocs\GetDocumentVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AuthenticationToken
 * @property string $DocumentId
 * @property string $VersionId
 * @property string|null $Fields
 * @property bool|null $IncludeCustomMetadata
 */
class GetDocumentVersionRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string|null,
     *     DocumentId: string,
     *     VersionId: string,
     *     Fields?: string|null,
     *     IncludeCustomMetadata?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
