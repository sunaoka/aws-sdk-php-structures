<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImagePipelines;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter> $filters
 * @property int<1, 25> $maxResults
 * @property string $nextToken
 */
class ListImagePipelinesRequest extends Request
{
    /**
     * @param array{
     *     filters?: list<Shapes\Filter>,
     *     maxResults?: int<1, 25>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
