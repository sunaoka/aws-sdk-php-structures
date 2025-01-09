<?php

namespace Sunaoka\Aws\Structures\QConnect\SearchQuickResponses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $attributesInterpolated
 * @property list<string> $attributesNotInterpolated
 * @property list<string> $channels
 * @property string $contentType
 * @property QuickResponseContents $contents
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property string $description
 * @property GroupingConfiguration $groupingConfiguration
 * @property bool $isActive
 * @property string $knowledgeBaseArn
 * @property string $knowledgeBaseId
 * @property string $language
 * @property string $lastModifiedBy
 * @property \Aws\Api\DateTimeResult $lastModifiedTime
 * @property string $name
 * @property string $quickResponseArn
 * @property string $quickResponseId
 * @property string $shortcutKey
 * @property 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'CREATED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED' $status
 * @property array<string, string> $tags
 */
class QuickResponseSearchResultData extends Shape
{
    /**
     * @param array{
     *     attributesInterpolated?: list<string>,
     *     attributesNotInterpolated?: list<string>,
     *     channels?: list<string>,
     *     contentType: string,
     *     contents: QuickResponseContents,
     *     createdTime: \Aws\Api\DateTimeResult,
     *     description?: string,
     *     groupingConfiguration?: GroupingConfiguration,
     *     isActive: bool,
     *     knowledgeBaseArn: string,
     *     knowledgeBaseId: string,
     *     language?: string,
     *     lastModifiedBy?: string,
     *     lastModifiedTime: \Aws\Api\DateTimeResult,
     *     name: string,
     *     quickResponseArn: string,
     *     quickResponseId: string,
     *     shortcutKey?: string,
     *     status: 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'CREATED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'DELETED'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED',
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
