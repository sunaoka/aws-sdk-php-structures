<?php

namespace Sunaoka\Aws\Structures\Iot\ListOTAUpdates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $otaUpdateId
 * @property string|null $otaUpdateArn
 * @property \Aws\Api\DateTimeResult|null $creationDate
 */
class OTAUpdateSummary extends Shape
{
    /**
     * @param array{
     *     otaUpdateId?: string|null,
     *     otaUpdateArn?: string|null,
     *     creationDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
