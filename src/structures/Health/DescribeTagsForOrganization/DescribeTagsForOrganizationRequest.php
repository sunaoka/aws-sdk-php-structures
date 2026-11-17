<?php

namespace Sunaoka\Aws\Structures\Health\DescribeTagsForOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DescribeTagsForOrganizationFilter|null $filter
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class DescribeTagsForOrganizationRequest extends Request
{
    /**
     * @param array{
     *     filter?: Shapes\DescribeTagsForOrganizationFilter|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
