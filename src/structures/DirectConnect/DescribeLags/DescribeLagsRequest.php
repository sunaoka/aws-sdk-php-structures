<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeLags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $lagId
 * @property int|null $maxResults
 * @property string|null $nextToken
 */
class DescribeLagsRequest extends Request
{
    /**
     * @param array{
     *     lagId?: string|null,
     *     maxResults?: int|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
