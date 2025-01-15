<?php

namespace Sunaoka\Aws\Structures\finspace\ListKxEnvironments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int|null $maxResults
 */
class ListKxEnvironmentsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
