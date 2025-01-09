<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEventsForOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\OrganizationEventFilter $filter
 * @property string $nextToken
 * @property int $maxResults
 * @property string $locale
 */
class DescribeEventsForOrganizationRequest extends Request
{
    /**
     * @param array{
     *     filter?: Shapes\OrganizationEventFilter,
     *     nextToken?: string,
     *     maxResults?: int,
     *     locale?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
