<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DescribeGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AuthenticationToken
 * @property string $SearchQuery
 * @property string|null $OrganizationId
 * @property string|null $Marker
 * @property int<1, max>|null $Limit
 */
class DescribeGroupsRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string|null,
     *     SearchQuery: string,
     *     OrganizationId?: string|null,
     *     Marker?: string|null,
     *     Limit?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
