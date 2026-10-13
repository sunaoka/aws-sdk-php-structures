<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\ListWebFunctionRevisions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $functionName
 * @property list<Shapes\Filter>|null $filters
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 */
class ListWebFunctionRevisionsRequest extends Request
{
    /**
     * @param array{
     *     functionName: string,
     *     filters?: list<Shapes\Filter>|null,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
