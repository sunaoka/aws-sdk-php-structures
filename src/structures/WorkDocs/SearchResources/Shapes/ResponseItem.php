<?php

namespace Sunaoka\Aws\Structures\WorkDocs\SearchResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DOCUMENT'|'FOLDER'|'COMMENT'|'DOCUMENT_VERSION' $ResourceType
 * @property string $WebUrl
 * @property DocumentMetadata $DocumentMetadata
 * @property FolderMetadata $FolderMetadata
 * @property CommentMetadata $CommentMetadata
 * @property DocumentVersionMetadata $DocumentVersionMetadata
 */
class ResponseItem extends Shape
{
    /**
     * @param array{
     *     ResourceType?: 'DOCUMENT'|'FOLDER'|'COMMENT'|'DOCUMENT_VERSION',
     *     WebUrl?: string,
     *     DocumentMetadata?: DocumentMetadata,
     *     FolderMetadata?: FolderMetadata,
     *     CommentMetadata?: CommentMetadata,
     *     DocumentVersionMetadata?: DocumentVersionMetadata
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
