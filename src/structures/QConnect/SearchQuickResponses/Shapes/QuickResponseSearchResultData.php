<?php

namespace Sunaoka\Aws\Structures\QConnect\SearchQuickResponses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $quickResponseArn
 * @property string $quickResponseId
 * @property string $knowledgeBaseArn
 * @property string $knowledgeBaseId
 * @property string $name
 * @property string $contentType
 * @property 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'CREATED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED' $status
 * @property QuickResponseContents $contents
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property \Aws\Api\DateTimeResult $lastModifiedTime
 * @property bool $isActive
 * @property string|null $description
 * @property GroupingConfiguration|null $groupingConfiguration
 * @property string|null $shortcutKey
 * @property string|null $lastModifiedBy
 * @property list<string>|null $channels
 * @property string|null $language
 * @property list<string>|null $attributesNotInterpolated
 * @property list<string>|null $attributesInterpolated
 * @property array<string, string>|null $tags
 */
class QuickResponseSearchResultData extends Shape
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
     *     contents: QuickResponseContents,
     *     createdTime: \Aws\Api\DateTimeResult,
     *     lastModifiedTime: \Aws\Api\DateTimeResult,
     *     isActive: bool,
     *     description?: string|null,
     *     groupingConfiguration?: GroupingConfiguration|null,
     *     shortcutKey?: string|null,
     *     lastModifiedBy?: string|null,
     *     channels?: list<string>|null,
     *     language?: string|null,
     *     attributesNotInterpolated?: list<string>|null,
     *     attributesInterpolated?: list<string>|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
