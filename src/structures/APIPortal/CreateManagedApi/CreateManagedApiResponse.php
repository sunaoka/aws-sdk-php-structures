<?php

namespace Sunaoka\Aws\Structures\APIPortal\CreateManagedApi;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $managedApiId
 * @property string $managedApiArn
 * @property Shapes\ApiSignature $apiSignature
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property array<string, string>|null $tags
 */
class CreateManagedApiResponse extends Response
{
}
