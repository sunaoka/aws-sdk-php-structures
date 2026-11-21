<?php

namespace Sunaoka\Aws\Structures\APIPortal\GetManagedApi;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $managedApiId
 * @property string $managedApiArn
 * @property Shapes\ApiSignature $apiSignature
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property list<Shapes\ManagedApiFinding>|null $findings
 * @property array<string, string>|null $tags
 */
class GetManagedApiResponse extends Response
{
}
