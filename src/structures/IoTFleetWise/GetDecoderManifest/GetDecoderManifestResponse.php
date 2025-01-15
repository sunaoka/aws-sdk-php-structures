<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetDecoderManifest;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $name
 * @property string $arn
 * @property string|null $description
 * @property string|null $modelManifestArn
 * @property 'ACTIVE'|'DRAFT'|'INVALID'|'VALIDATING'|null $status
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastModificationTime
 * @property string|null $message
 */
class GetDecoderManifestResponse extends Response
{
}
