<?php

namespace Sunaoka\Aws\Structures\Macie2\GetAllowList;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property Shapes\AllowListCriteria $criteria
 * @property string $description
 * @property string $id
 * @property string $name
 * @property Shapes\AllowListStatus $status
 * @property array<string, string> $tags
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class GetAllowListResponse extends Response
{
}
