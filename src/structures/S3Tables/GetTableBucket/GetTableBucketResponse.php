<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableBucket;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $name
 * @property string $ownerAccountId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $tableBucketId
 * @property 'customer'|'aws'|null $type
 */
class GetTableBucketResponse extends Response
{
}
