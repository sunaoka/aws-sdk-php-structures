<?php

namespace Sunaoka\Aws\Structures\Deadline\ListFarms;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property string|null $principalId
 * @property int<1, 100>|null $maxResults
 */
class ListFarmsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     principalId?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
