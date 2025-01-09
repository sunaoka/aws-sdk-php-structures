<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\ListQuickResponses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $channels
 * @property string $contentType
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property string $description
 * @property bool $isActive
 * @property string $knowledgeBaseArn
 * @property string $knowledgeBaseId
 * @property string $lastModifiedBy
 * @property \Aws\Api\DateTimeResult $lastModifiedTime
 * @property string $name
 * @property string $quickResponseArn
 * @property string $quickResponseId
 * @property 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'CREATED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED' $status
 * @property array<string, string> $tags
 */
class QuickResponseSummary extends Shape
{
    /**
     * @param array{
     *     channels?: list<string>,
     *     contentType: string,
     *     createdTime: \Aws\Api\DateTimeResult,
     *     description?: string,
     *     isActive?: bool,
     *     knowledgeBaseArn: string,
     *     knowledgeBaseId: string,
     *     lastModifiedBy?: string,
     *     lastModifiedTime: \Aws\Api\DateTimeResult,
     *     name: string,
     *     quickResponseArn: string,
     *     quickResponseId: string,
     *     status: 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'CREATED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED',
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
