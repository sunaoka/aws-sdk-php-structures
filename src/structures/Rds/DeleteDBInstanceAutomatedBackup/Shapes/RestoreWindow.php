<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteDBInstanceAutomatedBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $EarliestTime
 * @property \Aws\Api\DateTimeResult|null $LatestTime
 */
class RestoreWindow extends Shape
{
    /**
     * @param array{
     *     EarliestTime?: \Aws\Api\DateTimeResult|null,
     *     LatestTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
