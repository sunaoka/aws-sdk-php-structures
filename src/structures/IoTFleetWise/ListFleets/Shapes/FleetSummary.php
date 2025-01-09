<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property string $description
 * @property string $signalCatalogArn
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastModificationTime
 */
class FleetSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     arn: string,
     *     description?: string,
     *     signalCatalogArn: string,
     *     creationTime: \Aws\Api\DateTimeResult,
     *     lastModificationTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
