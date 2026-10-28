<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DAYS_180'|'DAYS_90'|'DAYS_60'|'DAYS_30'|'DAYS_14'|'DAYS_7'|null $lastLaunchedWithin
 * @property 'DAYS_180'|'DAYS_90'|'DAYS_60'|'DAYS_30'|'DAYS_14'|'DAYS_7'|null $createdWithin
 * @property AmiScanModeConfiguration|null $scanModeConfiguration
 * @property 'SUCCESS'|'PENDING'|'FAILED'|null $status
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class AmiConfigurationState extends Shape
{
    /**
     * @param array{
     *     lastLaunchedWithin?: 'DAYS_180'|'DAYS_90'|'DAYS_60'|'DAYS_30'|'DAYS_14'|'DAYS_7'|null,
     *     createdWithin?: 'DAYS_180'|'DAYS_90'|'DAYS_60'|'DAYS_30'|'DAYS_14'|'DAYS_7'|null,
     *     scanModeConfiguration?: AmiScanModeConfiguration|null,
     *     status?: 'SUCCESS'|'PENDING'|'FAILED'|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
