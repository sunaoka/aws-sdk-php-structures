<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $contentArn
 * @property string $contentId
 * @property string $knowledgeBaseArn
 * @property string $knowledgeBaseId
 * @property string $name
 * @property string $revisionId
 * @property string $title
 * @property string $contentType
 * @property 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED'|'UPDATE_FAILED' $status
 * @property array<string, string> $metadata
 * @property array<string, string>|null $tags
 * @property string|null $linkOutUri
 * @property string $url
 * @property \Aws\Api\DateTimeResult $urlExpiry
 */
class ContentData extends Shape
{
    /**
     * @param array{
     *     contentArn: string,
     *     contentId: string,
     *     knowledgeBaseArn: string,
     *     knowledgeBaseId: string,
     *     name: string,
     *     revisionId: string,
     *     title: string,
     *     contentType: string,
     *     status: 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED'|'UPDATE_FAILED',
     *     metadata: array<string, string>,
     *     tags?: array<string, string>|null,
     *     linkOutUri?: string|null,
     *     url: string,
     *     urlExpiry: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
