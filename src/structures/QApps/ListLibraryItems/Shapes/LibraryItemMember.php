<?php

namespace Sunaoka\Aws\Structures\QApps\ListLibraryItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $libraryItemId
 * @property string $appId
 * @property int<0, 2147483647> $appVersion
 * @property list<Category> $categories
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
class LibraryItemMember extends Shape
{
    /**
     * @param array{
     *     libraryItemId: string,
     *     appId: string,
     *     appVersion: int<0, 2147483647>,
     *     categories: list<Category>,
     *     status: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     createdBy: string,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedBy?: string|null,
     *     ratingCount: int,
     *     isRatedByUser?: bool|null,
     *     userCount?: int|null,
     *     isVerified?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
