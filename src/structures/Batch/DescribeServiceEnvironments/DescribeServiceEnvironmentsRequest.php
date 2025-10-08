<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeServiceEnvironments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $serviceEnvironments
 * @property int|null $maxResults
 * @property string|null $nextToken
 */
class DescribeServiceEnvironmentsRequest extends Request
{
    /**
     * @param array{
     *     serviceEnvironments?: list<string>|null,
     *     maxResults?: int|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
