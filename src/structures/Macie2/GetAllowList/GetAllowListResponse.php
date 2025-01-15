<?php

namespace Sunaoka\Aws\Structures\Macie2\GetAllowList;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property Shapes\AllowListCriteria|null $criteria
 * @property string|null $description
 * @property string|null $id
 * @property string|null $name
 * @property Shapes\AllowListStatus|null $status
 * @property array<string, string>|null $tags
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class GetAllowListResponse extends Response
{
}
