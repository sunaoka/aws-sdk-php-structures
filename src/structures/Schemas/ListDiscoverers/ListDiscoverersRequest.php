<?php

namespace Sunaoka\Aws\Structures\Schemas\ListDiscoverers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DiscovererIdPrefix
 * @property int $Limit
 * @property string $NextToken
 * @property string $SourceArnPrefix
 */
class ListDiscoverersRequest extends Request
{
    /**
     * @param array{
     *     DiscovererIdPrefix?: string,
     *     Limit?: int,
     *     NextToken?: string,
     *     SourceArnPrefix?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
