<?php

namespace Sunaoka\Aws\Structures\Chime\ListAppInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 50> $MaxResults
 * @property string $NextToken
 */
class ListAppInstancesRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 50>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
