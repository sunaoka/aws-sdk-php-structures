<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetDecoderManifest;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $name
 * @property string $arn
 * @property string|null $description
 * @property string|null $modelManifestArn
 * @property 'ACTIVE'|'DRAFT'|null $status
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastModificationTime
 */
class GetDecoderManifestResponse extends Response
{
}
