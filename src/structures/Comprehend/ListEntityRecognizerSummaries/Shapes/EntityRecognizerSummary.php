<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListEntityRecognizerSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RecognizerName
 * @property int $NumberOfVersions
 * @property \Aws\Api\DateTimeResult $LatestVersionCreatedAt
 * @property string $LatestVersionName
 * @property 'SUBMITTED'|'TRAINING'|'DELETING'|'STOP_REQUESTED'|'STOPPED'|'IN_ERROR'|'TRAINED'|'TRAINED_WITH_WARNING' $LatestVersionStatus
 */
class EntityRecognizerSummary extends Shape
{
    /**
     * @param array{
     *     RecognizerName?: string,
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
