<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListDocumentClassifierSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DocumentClassifierName
 * @property int $NumberOfVersions
 * @property \Aws\Api\DateTimeResult $LatestVersionCreatedAt
 * @property string $LatestVersionName
 * @property 'SUBMITTED'|'TRAINING'|'DELETING'|'STOP_REQUESTED'|'STOPPED'|'IN_ERROR'|'TRAINED'|'TRAINED_WITH_WARNING' $LatestVersionStatus
 */
class DocumentClassifierSummary extends Shape
{
    /**
     * @param array{
     *     DocumentClassifierName?: string,
     *     NumberOfVersions?: int,
     *     LatestVersionCreatedAt?: \Aws\Api\DateTimeResult,
     *     LatestVersionName?: string,
     *     LatestVersionStatus?: 'SUBMITTED'|'TRAINING'|'DELETING'|'STOP_REQUESTED'|'STOPPED'|'IN_ERROR'|'TRAINED'|'TRAINED_WITH_WARNING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
