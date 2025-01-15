<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $TotalGb
 * @property int|null $Files
 * @property int|null $Volumes
 */
class ScannedItemCount extends Shape
{
    /**
     * @param array{
     *     TotalGb?: int|null,
     *     Files?: int|null,
     *     Volumes?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
