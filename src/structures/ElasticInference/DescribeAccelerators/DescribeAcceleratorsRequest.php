<?php

namespace Sunaoka\Aws\Structures\ElasticInference\DescribeAccelerators;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $acceleratorIds
 * @property list<Shapes\Filter>|null $filters
 * @property int<0, 100>|null $maxResults
 * @property string|null $nextToken
 */
class DescribeAcceleratorsRequest extends Request
{
    /**
     * @param array{
     *     acceleratorIds?: list<string>|null,
     *     filters?: list<Shapes\Filter>|null,
     *     maxResults?: int<0, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
