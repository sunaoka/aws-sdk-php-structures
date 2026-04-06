<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\PutStorageConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<30, max>|null $numberOfDays
 * @property bool|null $unlimited
 */
class WarmTierRetentionPeriod extends Shape
{
    /**
     * @param array{
     *     numberOfDays?: int<30, max>|null,
     *     unlimited?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
