<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\SearchContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $contentArn
 * @property string $contentId
 * @property string $contentType
 * @property string $knowledgeBaseArn
 * @property string $knowledgeBaseId
 * @property array<string, string> $metadata
 * @property string $name
 * @property string $revisionId
 * @property 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED'|'UPDATE_FAILED' $status
 * @property array<string, string>|null $tags
 * @property string $title
 */
class ContentSummary extends Shape
{
    /**
     * @param array{
     *     contentArn: string,
     *     contentId: string,
     *     contentType: string,
     *     knowledgeBaseArn: string,
     *     knowledgeBaseId: string,
     *     metadata: array<string, string>,
     *     name: string,
     *     revisionId: string,
     *     status: 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED'|'UPDATE_FAILED',
     *     tags?: array<string, string>|null,
     *     title: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
