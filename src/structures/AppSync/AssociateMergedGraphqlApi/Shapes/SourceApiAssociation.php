<?php

namespace Sunaoka\Aws\Structures\AppSync\AssociateMergedGraphqlApi\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $associationId
 * @property string $associationArn
 * @property string $sourceApiId
 * @property string $sourceApiArn
 * @property string $mergedApiArn
 * @property string $mergedApiId
 * @property string $description
 * @property SourceApiAssociationConfig $sourceApiAssociationConfig
 * @property 'MERGE_SCHEDULED'|'MERGE_FAILED'|'MERGE_SUCCESS'|'MERGE_IN_PROGRESS'|'AUTO_MERGE_SCHEDULE_FAILED'|'DELETION_SCHEDULED'|'DELETION_IN_PROGRESS'|'DELETION_FAILED' $sourceApiAssociationStatus
 * @property string $sourceApiAssociationStatusDetail
 * @property \Aws\Api\DateTimeResult $lastSuccessfulMergeDate
 */
class SourceApiAssociation extends Shape
{
    /**
     * @param array{
     *     associationId?: string,
     *     associationArn?: string,
     *     sourceApiId?: string,
     *     sourceApiArn?: string,
     *     mergedApiArn?: string,
     *     mergedApiId?: string,
     *     description?: string,
     *     sourceApiAssociationConfig?: SourceApiAssociationConfig,
     *     sourceApiAssociationStatus?: 'MERGE_SCHEDULED'|'MERGE_FAILED'|'MERGE_SUCCESS'|'MERGE_IN_PROGRESS'|'AUTO_MERGE_SCHEDULE_FAILED'|'DELETION_SCHEDULED'|'DELETION_IN_PROGRESS'|'DELETION_FAILED',
     *     sourceApiAssociationStatusDetail?: string,
     *     lastSuccessfulMergeDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
