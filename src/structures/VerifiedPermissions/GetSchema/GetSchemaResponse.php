<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\GetSchema;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $policyStoreId
 * @property string $schema
 * @property \Aws\Api\DateTimeResult $createdDate
 * @property \Aws\Api\DateTimeResult $lastUpdatedDate
 * @property list<string>|null $namespaces
 */
class GetSchemaResponse extends Response
{
}
