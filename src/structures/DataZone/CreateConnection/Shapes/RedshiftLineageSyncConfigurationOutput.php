<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $enabled
 * @property string|null $lineageJobId
 * @property LineageSyncSchedule|null $schedule
 */
class RedshiftLineageSyncConfigurationOutput extends Shape
{
    /**
     * @param array{
     *     enabled?: bool|null,
     *     lineageJobId?: string|null,
     *     schedule?: LineageSyncSchedule|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
