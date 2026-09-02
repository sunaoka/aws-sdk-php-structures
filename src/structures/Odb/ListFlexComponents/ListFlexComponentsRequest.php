<?php

namespace Sunaoka\Aws\Structures\Odb\ListFlexComponents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $shape
 */
class ListFlexComponentsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     shape?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
