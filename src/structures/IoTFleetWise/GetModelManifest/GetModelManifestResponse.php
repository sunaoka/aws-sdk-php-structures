<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetModelManifest;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $name
 * @property string $arn
 * @property string|null $description
 * @property string|null $signalCatalogArn
 * @property 'ACTIVE'|'DRAFT'|'INVALID'|'VALIDATING'|null $status
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastModificationTime
 */
class GetModelManifestResponse extends Response
{
}
