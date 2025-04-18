<?php

namespace Sunaoka\Aws\Structures\QConnect\ListQuickResponses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $quickResponseArn
 * @property string $quickResponseId
 * @property string $knowledgeBaseArn
 * @property string $knowledgeBaseId
 * @property string $name
 * @property string $contentType
 * @property 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'CREATED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED' $status
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property \Aws\Api\DateTimeResult $lastModifiedTime
 * @property string|null $description
 * @property string|null $lastModifiedBy
 * @property bool|null $isActive
 * @property list<string>|null $channels
 * @property array<string, string>|null $tags
 */
class QuickResponseSummary extends Shape
{
    /**
     * @param array{
     *     quickResponseArn: string,
     *     quickResponseId: string,
     *     knowledgeBaseArn: string,
     *     knowledgeBaseId: string,
     *     name: string,
     *     contentType: string,
     *     status: 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'CREATED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED',
     *     createdTime: \Aws\Api\DateTimeResult,
     *     lastModifiedTime: \Aws\Api\DateTimeResult,
     *     description?: string|null,
     *     lastModifiedBy?: string|null,
     *     isActive?: bool|null,
     *     channels?: list<string>|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
