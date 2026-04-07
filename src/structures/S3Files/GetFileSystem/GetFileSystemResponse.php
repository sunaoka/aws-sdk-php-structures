<?php

namespace Sunaoka\Aws\Structures\S3Files\GetFileSystem;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property string|null $fileSystemArn
 * @property string|null $fileSystemId
 * @property string|null $bucket
 * @property string|null $prefix
 * @property string|null $clientToken
 * @property string|null $kmsKeyId
 * @property 'available'|'creating'|'deleting'|'deleted'|'error'|'updating'|null $status
 * @property string|null $statusMessage
 * @property string|null $roleArn
 * @property string|null $ownerId
 * @property list<Shapes\Tag>|null $tags
 * @property string|null $name
 */
class GetFileSystemResponse extends Response
{
}
