<?php

namespace Sunaoka\Aws\Structures\MediaStoreData\DescribeObject;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ETag
 * @property string $ContentType
 * @property int<0, max> $ContentLength
 * @property string $CacheControl
 * @property \Aws\Api\DateTimeResult $LastModified
 */
class DescribeObjectResponse extends Response
{
}
