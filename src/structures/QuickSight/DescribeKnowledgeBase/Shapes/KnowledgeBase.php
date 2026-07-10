<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KnowledgeBaseArn
 * @property string $KnowledgeBaseId
 * @property string $Name
 * @property 'CREATING'|'UPDATING'|'ACTIVE'|'FAILED'|'DELETING' $Status
 * @property string $DataSourceArn
 * @property KnowledgeBaseConfiguration $KnowledgeBaseConfiguration
 * @property MediaExtractionConfiguration|null $MediaExtractionConfiguration
 * @property AccessControlConfiguration|null $AccessControlConfiguration
 * @property string|null $Type
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property string|null $Description
 * @property bool|null $IsEmailNotificationOptedForIngestionFailures
 * @property KnowledgeBaseIngestionSummary|null $FirstCompletedIngestionSummary
 * @property KnowledgeBaseIngestionSummary|null $FirstIncompleteIngestionSummary
 * @property KnowledgeBaseIngestionSummary|null $LatestIngestionSummary
 * @property int|null $KnowledgeBaseSizeBytes
 * @property int|null $DocumentCount
 * @property string|null $PrimaryOwnerArn
 * @property string|null $PrimaryOwnerUsername
 */
class KnowledgeBase extends Shape
{
    /**
     * @param array{
     *     KnowledgeBaseArn: string,
     *     KnowledgeBaseId: string,
     *     Name: string,
     *     Status: 'CREATING'|'UPDATING'|'ACTIVE'|'FAILED'|'DELETING',
     *     DataSourceArn: string,
     *     KnowledgeBaseConfiguration: KnowledgeBaseConfiguration,
     *     MediaExtractionConfiguration?: MediaExtractionConfiguration|null,
     *     AccessControlConfiguration?: AccessControlConfiguration|null,
     *     Type?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     Description?: string|null,
     *     IsEmailNotificationOptedForIngestionFailures?: bool|null,
     *     FirstCompletedIngestionSummary?: KnowledgeBaseIngestionSummary|null,
     *     FirstIncompleteIngestionSummary?: KnowledgeBaseIngestionSummary|null,
     *     LatestIngestionSummary?: KnowledgeBaseIngestionSummary|null,
     *     KnowledgeBaseSizeBytes?: int|null,
     *     DocumentCount?: int|null,
     *     PrimaryOwnerArn?: string|null,
     *     PrimaryOwnerUsername?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
