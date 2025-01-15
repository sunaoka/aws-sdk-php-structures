<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateApiKey;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $id
 * @property string|null $value
 * @property string|null $name
 * @property string|null $customerId
 * @property string|null $description
 * @property bool|null $enabled
 * @property \Aws\Api\DateTimeResult|null $createdDate
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDate
 * @property list<string>|null $stageKeys
 * @property array<string, string>|null $tags
 */
class UpdateApiKeyResponse extends Response
{
}
