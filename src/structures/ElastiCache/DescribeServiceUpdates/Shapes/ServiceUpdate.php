<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeServiceUpdates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServiceUpdateName
 * @property \Aws\Api\DateTimeResult $ServiceUpdateReleaseDate
 * @property \Aws\Api\DateTimeResult $ServiceUpdateEndDate
 * @property 'critical'|'important'|'medium'|'low' $ServiceUpdateSeverity
 * @property \Aws\Api\DateTimeResult $ServiceUpdateRecommendedApplyByDate
 * @property 'available'|'cancelled'|'expired' $ServiceUpdateStatus
 * @property string $ServiceUpdateDescription
 * @property 'security-update' $ServiceUpdateType
 * @property string $Engine
 * @property string $EngineVersion
 * @property bool $AutoUpdateAfterRecommendedApplyByDate
 * @property string $EstimatedUpdateTime
 */
class ServiceUpdate extends Shape
{
    /**
     * @param array{
     *     ServiceUpdateName?: string,
     *     ServiceUpdateReleaseDate?: \Aws\Api\DateTimeResult,
     *     ServiceUpdateEndDate?: \Aws\Api\DateTimeResult,
     *     ServiceUpdateSeverity?: 'critical'|'important'|'medium'|'low',
     *     ServiceUpdateRecommendedApplyByDate?: \Aws\Api\DateTimeResult,
     *     ServiceUpdateStatus?: 'available'|'cancelled'|'expired',
     *     ServiceUpdateDescription?: string,
     *     ServiceUpdateType?: 'security-update',
     *     Engine?: string,
     *     EngineVersion?: string,
     *     AutoUpdateAfterRecommendedApplyByDate?: bool,
     *     EstimatedUpdateTime?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
