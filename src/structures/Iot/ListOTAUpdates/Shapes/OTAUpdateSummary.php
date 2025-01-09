<?php

namespace Sunaoka\Aws\Structures\Iot\ListOTAUpdates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $otaUpdateId
 * @property string $otaUpdateArn
 * @property \Aws\Api\DateTimeResult $creationDate
 */
class OTAUpdateSummary extends Shape
{
    /**
     * @param array{
     *     otaUpdateId?: string,
     *     otaUpdateArn?: string,
     *     creationDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
