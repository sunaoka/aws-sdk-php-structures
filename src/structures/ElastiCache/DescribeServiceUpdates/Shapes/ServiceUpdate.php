<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeServiceUpdates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ServiceUpdateName
 * @property \Aws\Api\DateTimeResult|null $ServiceUpdateReleaseDate
 * @property \Aws\Api\DateTimeResult|null $ServiceUpdateEndDate
 * @property 'critical'|'important'|'medium'|'low'|null $ServiceUpdateSeverity
 * @property \Aws\Api\DateTimeResult|null $ServiceUpdateRecommendedApplyByDate
 * @property 'available'|'cancelled'|'expired'|null $ServiceUpdateStatus
 * @property string|null $ServiceUpdateDescription
 * @property 'security-update'|null $ServiceUpdateType
 * @property string|null $Engine
 * @property string|null $EngineVersion
 * @property bool|null $AutoUpdateAfterRecommendedApplyByDate
 * @property string|null $EstimatedUpdateTime
 */
class ServiceUpdate extends Shape
{
    /**
     * @param array{
     *     ServiceUpdateName?: string|null,
     *     ServiceUpdateReleaseDate?: \Aws\Api\DateTimeResult|null,
     *     ServiceUpdateEndDate?: \Aws\Api\DateTimeResult|null,
     *     ServiceUpdateSeverity?: 'critical'|'important'|'medium'|'low'|null,
     *     ServiceUpdateRecommendedApplyByDate?: \Aws\Api\DateTimeResult|null,
     *     ServiceUpdateStatus?: 'available'|'cancelled'|'expired'|null,
     *     ServiceUpdateDescription?: string|null,
     *     ServiceUpdateType?: 'security-update'|null,
     *     Engine?: string|null,
     *     EngineVersion?: string|null,
     *     AutoUpdateAfterRecommendedApplyByDate?: bool|null,
     *     EstimatedUpdateTime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
