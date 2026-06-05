<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchKnowledgeBases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KnowledgeBaseArn
 * @property string $KnowledgeBaseId
 * @property string $Name
 * @property 'CREATING'|'UPDATING'|'ACTIVE'|'FAILED'|'DELETING' $Status
 * @property string $DataSourceArn
 * @property string|null $Type
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property int|null $KnowledgeBaseSizeBytes
 * @property int|null $DocumentCount
 * @property string|null $PrimaryOwnerArn
 * @property string|null $PrimaryOwnerUsername
 */
class KnowledgeBaseSummary extends Shape
{
    /**
     * @param array{
     *     KnowledgeBaseArn: string,
     *     KnowledgeBaseId: string,
     *     Name: string,
     *     Status: 'CREATING'|'UPDATING'|'ACTIVE'|'FAILED'|'DELETING',
     *     DataSourceArn: string,
     *     Type?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
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
