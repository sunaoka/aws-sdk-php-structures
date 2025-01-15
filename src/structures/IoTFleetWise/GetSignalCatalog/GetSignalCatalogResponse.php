<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetSignalCatalog;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $name
 * @property string $arn
 * @property string|null $description
 * @property Shapes\NodeCounts|null $nodeCounts
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastModificationTime
 */
class GetSignalCatalogResponse extends Response
{
}
