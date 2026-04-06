<?php

namespace Sunaoka\Aws\Structures\IoTRoboRunner\UpdateWorker;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $id
 * @property string $fleet
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $name
 * @property string|null $additionalTransientProperties
 * @property string|null $additionalFixedProperties
 * @property Shapes\Orientation|null $orientation
 * @property Shapes\VendorProperties|null $vendorProperties
 * @property Shapes\PositionCoordinates|null $position
 */
class UpdateWorkerResponse extends Response
{
}
