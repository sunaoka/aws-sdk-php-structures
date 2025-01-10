<?php

namespace Sunaoka\Aws\Structures\MediaStoreData\GetObject;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Psr\Http\Message\StreamInterface $Body
 * @property string $CacheControl
 * @property string $ContentRange
 * @property int<0, max> $ContentLength
 * @property string $ContentType
 * @property string $ETag
 * @property \Aws\Api\DateTimeResult $LastModified
 * @property int $StatusCode
 */
class GetObjectResponse extends Response
{
}
