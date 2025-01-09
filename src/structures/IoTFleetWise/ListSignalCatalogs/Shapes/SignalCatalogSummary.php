<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListSignalCatalogs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastModificationTime
 */
class SignalCatalogSummary extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     arn?: string,
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     lastModificationTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
