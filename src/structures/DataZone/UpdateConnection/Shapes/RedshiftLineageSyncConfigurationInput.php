<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $enabled
 * @property LineageSyncSchedule|null $schedule
 */
class RedshiftLineageSyncConfigurationInput extends Shape
{
    /**
     * @param array{
     *     enabled?: bool|null,
     *     schedule?: LineageSyncSchedule|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
