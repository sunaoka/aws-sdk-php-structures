<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateApplicationSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DailyCap
 * @property JourneyTimeframeCap $TimeframeCap
 * @property int $TotalCap
 */
class ApplicationSettingsJourneyLimits extends Shape
{
    /**
     * @param array{
     *     DailyCap?: int,
     *     TimeframeCap?: JourneyTimeframeCap,
     *     TotalCap?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
