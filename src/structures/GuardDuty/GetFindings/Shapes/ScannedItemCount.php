<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $TotalGb
 * @property int $Files
 * @property int $Volumes
 */
class ScannedItemCount extends Shape
{
    /**
     * @param array{
     *     TotalGb?: int,
     *     Files?: int,
     *     Volumes?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
