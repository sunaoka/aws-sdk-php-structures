<?php

namespace Sunaoka\Aws\Structures\Macie\ListS3Resources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $memberAccountId
 * @property string|null $nextToken
 * @property int<min, 250>|null $maxResults
 */
class ListS3ResourcesRequest extends Request
{
    /**
     * @param array{
     *     memberAccountId?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<min, 250>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
