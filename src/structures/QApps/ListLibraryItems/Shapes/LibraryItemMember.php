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
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $updatedBy
 * @property int $ratingCount
 * @property bool $isRatedByUser
 * @property int $userCount
 * @property bool $isVerified
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
     *     updatedAt?: \Aws\Api\DateTimeResult,
     *     updatedBy?: string,
     *     ratingCount: int,
     *     isRatedByUser?: bool,
     *     userCount?: int,
     *     isVerified?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
