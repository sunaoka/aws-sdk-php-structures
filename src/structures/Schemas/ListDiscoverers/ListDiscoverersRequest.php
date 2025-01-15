<?php

namespace Sunaoka\Aws\Structures\Schemas\ListDiscoverers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DiscovererIdPrefix
 * @property int|null $Limit
 * @property string|null $NextToken
 * @property string|null $SourceArnPrefix
 */
class ListDiscoverersRequest extends Request
{
    /**
     * @param array{
     *     DiscovererIdPrefix?: string|null,
     *     Limit?: int|null,
     *     NextToken?: string|null,
     *     SourceArnPrefix?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
