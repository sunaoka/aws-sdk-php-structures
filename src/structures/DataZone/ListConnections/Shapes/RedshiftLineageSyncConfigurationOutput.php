<?php

namespace Sunaoka\Aws\Structures\DataZone\ListConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $lineageJobId
 * @property bool|null $enabled
 * @property LineageSyncSchedule|null $schedule
 */
class RedshiftLineageSyncConfigurationOutput extends Shape
{
    /**
     * @param array{
     *     lineageJobId?: string|null,
     *     enabled?: bool|null,
     *     schedule?: LineageSyncSchedule|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
