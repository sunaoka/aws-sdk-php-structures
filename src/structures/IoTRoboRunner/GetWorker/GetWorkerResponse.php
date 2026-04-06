<?php

namespace Sunaoka\Aws\Structures\IoTRoboRunner\GetWorker;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $id
 * @property string $fleet
 * @property string $site
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $name
 * @property string|null $additionalTransientProperties
 * @property string|null $additionalFixedProperties
 * @property Shapes\VendorProperties|null $vendorProperties
 * @property Shapes\PositionCoordinates|null $position
 * @property Shapes\Orientation|null $orientation
 */
class GetWorkerResponse extends Response
{
}
