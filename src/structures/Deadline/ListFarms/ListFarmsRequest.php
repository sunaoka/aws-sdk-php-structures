<?php

namespace Sunaoka\Aws\Structures\Deadline\ListFarms;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property string $principalId
 * @property int<1, 100> $maxResults
 */
class ListFarmsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     principalId?: string,
     *     maxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
