<?php

namespace Sunaoka\Aws\Structures\WorkDocs\GetDocument;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AuthenticationToken
 * @property string $DocumentId
 * @property bool|null $IncludeCustomMetadata
 */
class GetDocumentRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string|null,
     *     DocumentId: string,
     *     IncludeCustomMetadata?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
