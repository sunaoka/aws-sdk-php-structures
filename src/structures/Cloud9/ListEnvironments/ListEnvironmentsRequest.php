<?php

namespace Sunaoka\Aws\Structures\Cloud9\ListEnvironments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<0, 25>|null $maxResults
 */
class ListEnvironmentsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<0, 25>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
