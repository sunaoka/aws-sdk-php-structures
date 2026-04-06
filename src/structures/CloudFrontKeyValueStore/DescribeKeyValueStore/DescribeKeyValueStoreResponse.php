<?php

namespace Sunaoka\Aws\Structures\CloudFrontKeyValueStore\DescribeKeyValueStore;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int $ItemCount
 * @property int $TotalSizeInBytes
 * @property string $KvsARN
 * @property \Aws\Api\DateTimeResult $Created
 * @property string $ETag
 * @property \Aws\Api\DateTimeResult|null $LastModified
 * @property string|null $Status
 * @property string|null $FailureReason
 */
class DescribeKeyValueStoreResponse extends Response
{
}
