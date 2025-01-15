<?php

namespace Sunaoka\Aws\Structures\Rekognition\ListUsers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CollectionId
 * @property int<1, 500>|null $MaxResults
 * @property string|null $NextToken
 */
class ListUsersRequest extends Request
{
    /**
     * @param array{
     *     CollectionId: string,
     *     MaxResults?: int<1, 500>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
