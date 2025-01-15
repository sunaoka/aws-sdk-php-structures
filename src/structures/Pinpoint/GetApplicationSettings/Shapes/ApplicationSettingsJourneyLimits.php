<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetApplicationSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $DailyCap
 * @property JourneyTimeframeCap|null $TimeframeCap
 * @property int|null $TotalCap
 */
class ApplicationSettingsJourneyLimits extends Shape
{
    /**
     * @param array{
     *     DailyCap?: int|null,
     *     TimeframeCap?: JourneyTimeframeCap|null,
     *     TotalCap?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
