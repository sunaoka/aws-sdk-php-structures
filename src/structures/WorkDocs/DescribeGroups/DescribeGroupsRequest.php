<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DescribeGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AuthenticationToken
 * @property string $SearchQuery
 * @property string $OrganizationId
 * @property string $Marker
 * @property int $Limit
 */
class DescribeGroupsRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string,
     *     SearchQuery: string,
     *     OrganizationId?: string,
     *     Marker?: string,
     *     Limit?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
