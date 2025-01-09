<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property LineageSyncSchedule $schedule
 */
class RedshiftLineageSyncConfigurationInput extends Shape
{
    /**
     * @param array{
     *     enabled?: bool,
     *     schedule?: LineageSyncSchedule
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
