<?php

namespace Sunaoka\Aws\Structures\QApps\CreatePresignedUrl;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $fileId
 * @property string $presignedUrl
 * @property array<string, string> $presignedUrlFields
 * @property \Aws\Api\DateTimeResult $presignedUrlExpiration
 */
class CreatePresignedUrlResponse extends Response
{
}
