<?php

namespace Sunaoka\Aws\Structures\QConnect\ListQuickResponses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $channels
 * @property string $contentType
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property string|null $description
 * @property bool|null $isActive
 * @property string $knowledgeBaseArn
 * @property string $knowledgeBaseId
 * @property string|null $lastModifiedBy
 * @property \Aws\Api\DateTimeResult $lastModifiedTime
 * @property string $name
 * @property string $quickResponseArn
 * @property string $quickResponseId
 * @property 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'CREATED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED' $status
 * @property array<string, string>|null $tags
 */
class QuickResponseSummary extends Shape
{
    /**
     * @param array{
     *     channels?: list<string>|null,
     *     contentType: string,
     *     createdTime: \Aws\Api\DateTimeResult,
     *     description?: string|null,
     *     isActive?: bool|null,
     *     knowledgeBaseArn: string,
     *     knowledgeBaseId: string,
     *     lastModifiedBy?: string|null,
     *     lastModifiedTime: \Aws\Api\DateTimeResult,
     *     name: string,
     *     quickResponseArn: string,
     *     quickResponseId: string,
     *     status: 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'CREATED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED',
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
