<?php

namespace Sunaoka\Aws\Structures\MediaStoreData\GetObject;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Psr\Http\Message\StreamInterface $Body
 * @property string|null $CacheControl
 * @property string|null $ContentRange
 * @property int<0, max>|null $ContentLength
 * @property string|null $ContentType
 * @property string|null $ETag
 * @property \Aws\Api\DateTimeResult|null $LastModified
 * @property int $StatusCode
 */
class GetObjectResponse extends Response
{
}
