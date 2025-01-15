<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteDataMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CDCStartPosition
 * @property \Aws\Api\DateTimeResult|null $CDCStartTime
 * @property \Aws\Api\DateTimeResult|null $CDCStopTime
 * @property string|null $SlotName
 */
class SourceDataSetting extends Shape
{
    /**
     * @param array{
     *     CDCStartPosition?: string|null,
     *     CDCStartTime?: \Aws\Api\DateTimeResult|null,
     *     CDCStopTime?: \Aws\Api\DateTimeResult|null,
     *     SlotName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
