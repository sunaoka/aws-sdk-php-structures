<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DeleteDocument;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AuthenticationToken
 * @property string $DocumentId
 */
class DeleteDocumentRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string|null,
     *     DocumentId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
