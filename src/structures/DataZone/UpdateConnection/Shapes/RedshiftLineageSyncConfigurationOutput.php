<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property string $lineageJobId
 * @property LineageSyncSchedule $schedule
 */
class RedshiftLineageSyncConfigurationOutput extends Shape
{
    /**
     * @param array{
     *     enabled?: bool,
     *     lineageJobId?: string,
     *     schedule?: LineageSyncSchedule
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
