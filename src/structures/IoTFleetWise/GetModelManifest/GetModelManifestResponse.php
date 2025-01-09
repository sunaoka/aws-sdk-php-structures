<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetModelManifest;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $name
 * @property string $arn
 * @property string $description
 * @property string $signalCatalogArn
 * @property 'ACTIVE'|'DRAFT'|'INVALID'|'VALIDATING' $status
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastModificationTime
 */
class GetModelManifestResponse extends Response
{
}
