<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetFleet;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $arn
 * @property string|null $description
 * @property string $signalCatalogArn
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastModificationTime
 */
class GetFleetResponse extends Response
{
}
