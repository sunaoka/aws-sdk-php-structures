<?php

namespace Sunaoka\Aws\Structures\WorkDocs\GetDocument;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AuthenticationToken
 * @property string $DocumentId
 * @property bool $IncludeCustomMetadata
 */
class GetDocumentRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string,
     *     DocumentId: string,
     *     IncludeCustomMetadata?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
