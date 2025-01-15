<?php

namespace Sunaoka\Aws\Structures\FMS\ListDiscoveredResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $MemberAccountIds
 * @property string $ResourceType
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListDiscoveredResourcesRequest extends Request
{
    /**
     * @param array{
     *     MemberAccountIds: list<string>,
     *     ResourceType: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
