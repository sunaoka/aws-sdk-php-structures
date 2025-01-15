<?php

namespace Sunaoka\Aws\Structures\QApps\CreateLibraryItem;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $libraryItemId
 * @property string $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 * @property int $ratingCount
 * @property bool|null $isVerified
 */
class CreateLibraryItemResponse extends Response
{
}
