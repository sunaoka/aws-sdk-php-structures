<?php

namespace Sunaoka\Aws\Structures\MediaStoreData\DescribeObject;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ETag
 * @property string|null $ContentType
 * @property int<0, max>|null $ContentLength
 * @property string|null $CacheControl
 * @property \Aws\Api\DateTimeResult|null $LastModified
 */
class DescribeObjectResponse extends Response
{
}
