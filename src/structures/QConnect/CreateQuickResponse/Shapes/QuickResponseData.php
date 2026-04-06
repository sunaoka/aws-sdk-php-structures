<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateQuickResponse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $channels
 * @property string $contentType
 * @property QuickResponseContents|null $contents
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property string|null $description
 * @property GroupingConfiguration|null $groupingConfiguration
 * @property bool|null $isActive
 * @property string $knowledgeBaseArn
 * @property string $knowledgeBaseId
 * @property string|null $language
 * @property string|null $lastModifiedBy
 * @property \Aws\Api\DateTimeResult $lastModifiedTime
 * @property string $name
 * @property string $quickResponseArn
 * @property string $quickResponseId
 * @property string|null $shortcutKey
 * @property 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'CREATED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED' $status
 * @property array<string, string>|null $tags
 */
class QuickResponseData extends Shape
{
    /**
     * @param array{
     *     channels?: list<string>|null,
     *     contentType: string,
     *     contents?: QuickResponseContents|null,
     *     createdTime: \Aws\Api\DateTimeResult,
     *     description?: string|null,
     *     groupingConfiguration?: GroupingConfiguration|null,
     *     isActive?: bool|null,
     *     knowledgeBaseArn: string,
     *     knowledgeBaseId: string,
     *     language?: string|null,
     *     lastModifiedBy?: string|null,
     *     lastModifiedTime: \Aws\Api\DateTimeResult,
     *     name: string,
     *     quickResponseArn: string,
     *     quickResponseId: string,
     *     shortcutKey?: string|null,
     *     status: 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'CREATED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED',
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
