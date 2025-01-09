<?php

namespace Sunaoka\Aws\Structures\ElasticInference\DescribeAccelerators;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $acceleratorIds
 * @property list<Shapes\Filter> $filters
 * @property int $maxResults
 * @property string $nextToken
 */
class DescribeAcceleratorsRequest extends Request
{
    /**
     * @param array{
     *     acceleratorIds?: list<string>,
     *     filters?: list<Shapes\Filter>,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
