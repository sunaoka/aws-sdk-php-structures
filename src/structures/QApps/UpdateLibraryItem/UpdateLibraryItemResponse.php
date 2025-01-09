<?php

namespace Sunaoka\Aws\Structures\QApps\UpdateLibraryItem;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $libraryItemId
 * @property string $appId
 * @property int $appVersion
 * @property list<Shapes\Category> $categories
 * @property string $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $updatedBy
 * @property int $ratingCount
 * @property bool $isRatedByUser
 * @property int $userCount
 * @property bool $isVerified
 */
class UpdateLibraryItemResponse extends Response
{
}
