<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListDocumentClassifierSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DocumentClassifierName
 * @property int|null $NumberOfVersions
 * @property \Aws\Api\DateTimeResult|null $LatestVersionCreatedAt
 * @property string|null $LatestVersionName
 * @property 'SUBMITTED'|'TRAINING'|'DELETING'|'STOP_REQUESTED'|'STOPPED'|'IN_ERROR'|'TRAINED'|'TRAINED_WITH_WARNING'|null $LatestVersionStatus
 */
class DocumentClassifierSummary extends Shape
{
    /**
     * @param array{
     *     DocumentClassifierName?: string|null,
     *     NumberOfVersions?: int|null,
     *     LatestVersionCreatedAt?: \Aws\Api\DateTimeResult|null,
     *     LatestVersionName?: string|null,
     *     LatestVersionStatus?: 'SUBMITTED'|'TRAINING'|'DELETING'|'STOP_REQUESTED'|'STOPPED'|'IN_ERROR'|'TRAINED'|'TRAINED_WITH_WARNING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
