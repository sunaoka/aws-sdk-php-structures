<?php

namespace Sunaoka\Aws\Structures\Rekognition\SearchUsers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CollectionId
 * @property string $UserId
 * @property string $FaceId
 * @property float $UserMatchThreshold
 * @property int $MaxUsers
 */
class SearchUsersRequest extends Request
{
    /**
     * @param array{
     *     CollectionId: string,
     *     UserId?: string,
     *     FaceId?: string,
     *     UserMatchThreshold?: float,
     *     MaxUsers?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
