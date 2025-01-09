<?php

namespace Sunaoka\Aws\Structures\Deadline\ListFarms;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property string $principalId
 * @property int $maxResults
 */
class ListFarmsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     principalId?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
