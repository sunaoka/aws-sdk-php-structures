<?php

namespace Sunaoka\Aws\Structures\Rekognition\SearchUsers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CollectionId
 * @property string|null $UserId
 * @property string|null $FaceId
 * @property float|null $UserMatchThreshold
 * @property int<1, 500>|null $MaxUsers
 */
class SearchUsersRequest extends Request
{
    /**
     * @param array{
     *     CollectionId: string,
     *     UserId?: string|null,
     *     FaceId?: string|null,
     *     UserMatchThreshold?: float|null,
     *     MaxUsers?: int<1, 500>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
