<?php

namespace Sunaoka\Aws\Structures\Route53\ListHealthCheckSources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property string|null $MaxResults
 */
class ListHealthCheckSourcesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
