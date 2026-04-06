<?php

namespace Sunaoka\Aws\Structures\QApps\UpdateLibraryItem;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $libraryItemId
 * @property string $appId
 * @property int<0, 2147483647> $appVersion
 * @property list<Shapes\Category> $categories
 * @property string $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 * @property int $ratingCount
 * @property bool|null $isRatedByUser
 * @property int|null $userCount
 * @property bool|null $isVerified
 */
class UpdateLibraryItemResponse extends Response
{
}
