<?php

namespace Sunaoka\Aws\Structures\Rekognition\ListUsers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CollectionId
 * @property int<1, 500> $MaxResults
 * @property string $NextToken
 */
class ListUsersRequest extends Request
{
    /**
     * @param array{
     *     CollectionId: string,
     *     MaxResults?: int<1, 500>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
