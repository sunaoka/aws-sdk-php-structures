<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetDecoderManifest;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $name
 * @property string $arn
 * @property string $description
 * @property string $modelManifestArn
 * @property 'ACTIVE'|'DRAFT'|'INVALID'|'VALIDATING' $status
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastModificationTime
 * @property string $message
 */
class GetDecoderManifestResponse extends Response
{
}
