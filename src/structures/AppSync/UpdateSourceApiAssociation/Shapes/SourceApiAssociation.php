<?php

namespace Sunaoka\Aws\Structures\AppSync\UpdateSourceApiAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $associationId
 * @property string|null $associationArn
 * @property string|null $sourceApiId
 * @property string|null $sourceApiArn
 * @property string|null $mergedApiArn
 * @property string|null $mergedApiId
 * @property string|null $description
 * @property SourceApiAssociationConfig|null $sourceApiAssociationConfig
 * @property 'MERGE_SCHEDULED'|'MERGE_FAILED'|'MERGE_SUCCESS'|'MERGE_IN_PROGRESS'|'AUTO_MERGE_SCHEDULE_FAILED'|'DELETION_SCHEDULED'|'DELETION_IN_PROGRESS'|'DELETION_FAILED'|null $sourceApiAssociationStatus
 * @property string|null $sourceApiAssociationStatusDetail
 * @property \Aws\Api\DateTimeResult|null $lastSuccessfulMergeDate
 */
class SourceApiAssociation extends Shape
{
    /**
     * @param array{
     *     associationId?: string|null,
     *     associationArn?: string|null,
     *     sourceApiId?: string|null,
     *     sourceApiArn?: string|null,
     *     mergedApiArn?: string|null,
     *     mergedApiId?: string|null,
     *     description?: string|null,
     *     sourceApiAssociationConfig?: SourceApiAssociationConfig|null,
     *     sourceApiAssociationStatus?: 'MERGE_SCHEDULED'|'MERGE_FAILED'|'MERGE_SUCCESS'|'MERGE_IN_PROGRESS'|'AUTO_MERGE_SCHEDULE_FAILED'|'DELETION_SCHEDULED'|'DELETION_IN_PROGRESS'|'DELETION_FAILED'|null,
     *     sourceApiAssociationStatusDetail?: string|null,
     *     lastSuccessfulMergeDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
