<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DAYS_180'|'DAYS_90'|'DAYS_60'|'DAYS_30'|'DAYS_14'|'DAYS_7'|null $lastLaunchedWithin
 * @property 'DAYS_180'|'DAYS_90'|'DAYS_60'|'DAYS_30'|'DAYS_14'|'DAYS_7'|null $createdWithin
 * @property AmiScanModeConfiguration $scanModeConfiguration
 */
class AmiConfiguration extends Shape
{
    /**
     * @param array{
     *     lastLaunchedWithin?: 'DAYS_180'|'DAYS_90'|'DAYS_60'|'DAYS_30'|'DAYS_14'|'DAYS_7'|null,
     *     createdWithin?: 'DAYS_180'|'DAYS_90'|'DAYS_60'|'DAYS_30'|'DAYS_14'|'DAYS_7'|null,
     *     scanModeConfiguration: AmiScanModeConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
