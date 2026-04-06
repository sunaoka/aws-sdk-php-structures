<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetNamespace;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<string> $namespace
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $ownerAccountId
 * @property string|null $namespaceId
 * @property string|null $tableBucketId
 */
class GetNamespaceResponse extends Response
{
}
