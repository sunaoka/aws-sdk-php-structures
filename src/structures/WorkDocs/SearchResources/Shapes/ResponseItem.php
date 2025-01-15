<?php

namespace Sunaoka\Aws\Structures\WorkDocs\SearchResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DOCUMENT'|'FOLDER'|'COMMENT'|'DOCUMENT_VERSION'|null $ResourceType
 * @property string|null $WebUrl
 * @property DocumentMetadata|null $DocumentMetadata
 * @property FolderMetadata|null $FolderMetadata
 * @property CommentMetadata|null $CommentMetadata
 * @property DocumentVersionMetadata|null $DocumentVersionMetadata
 */
class ResponseItem extends Shape
{
    /**
     * @param array{
     *     ResourceType?: 'DOCUMENT'|'FOLDER'|'COMMENT'|'DOCUMENT_VERSION'|null,
     *     WebUrl?: string|null,
     *     DocumentMetadata?: DocumentMetadata|null,
     *     FolderMetadata?: FolderMetadata|null,
     *     CommentMetadata?: CommentMetadata|null,
     *     DocumentVersionMetadata?: DocumentVersionMetadata|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
