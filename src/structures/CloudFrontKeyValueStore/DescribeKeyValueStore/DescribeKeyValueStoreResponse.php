<?php

namespace Sunaoka\Aws\Structures\CloudFrontKeyValueStore\DescribeKeyValueStore;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int $ItemCount
 * @property int $TotalSizeInBytes
 * @property string $KvsARN
 * @property \Aws\Api\DateTimeResult $Created
 * @property string $ETag
 * @property \Aws\Api\DateTimeResult $LastModified
 * @property string $Status
 * @property string $FailureReason
 */
class DescribeKeyValueStoreResponse extends Response
{
}
