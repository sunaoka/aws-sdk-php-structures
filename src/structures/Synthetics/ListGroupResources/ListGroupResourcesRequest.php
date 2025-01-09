<?php

namespace Sunaoka\Aws\Structures\Synthetics\ListGroupResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<1, 20> $MaxResults
 * @property string $GroupIdentifier
 */
class ListGroupResourcesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<1, 20>,
     *     GroupIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
