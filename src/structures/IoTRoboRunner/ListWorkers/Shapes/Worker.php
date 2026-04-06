<?php

namespace Sunaoka\Aws\Structures\IoTRoboRunner\ListWorkers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $id
 * @property string $fleet
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $name
 * @property string $site
 * @property string|null $additionalTransientProperties
 * @property string|null $additionalFixedProperties
 * @property VendorProperties|null $vendorProperties
 * @property PositionCoordinates|null $position
 * @property Orientation|null $orientation
 */
class Worker extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     id: string,
     *     fleet: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     name: string,
     *     site: string,
     *     additionalTransientProperties?: string|null,
     *     additionalFixedProperties?: string|null,
     *     vendorProperties?: VendorProperties|null,
     *     position?: PositionCoordinates|null,
     *     orientation?: Orientation|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
