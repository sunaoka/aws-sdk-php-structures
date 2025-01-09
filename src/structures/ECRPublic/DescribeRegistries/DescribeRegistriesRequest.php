<?php

namespace Sunaoka\Aws\Structures\ECRPublic\DescribeRegistries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int<1, 1000> $maxResults
 */
class DescribeRegistriesRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
