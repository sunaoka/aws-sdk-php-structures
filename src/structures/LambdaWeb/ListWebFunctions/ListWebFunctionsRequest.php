<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\ListWebFunctions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $filters
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 */
class ListWebFunctionsRequest extends Request
{
    /**
     * @param array{
     *     filters?: list<Shapes\Filter>|null,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
