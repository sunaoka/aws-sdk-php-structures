<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetApiKey;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $value
 * @property string $name
 * @property string $customerId
 * @property string $description
 * @property bool $enabled
 * @property \Aws\Api\DateTimeResult $createdDate
 * @property \Aws\Api\DateTimeResult $lastUpdatedDate
 * @property list<string> $stageKeys
 * @property array<string, string> $tags
 */
class GetApiKeyResponse extends Response
{
}
