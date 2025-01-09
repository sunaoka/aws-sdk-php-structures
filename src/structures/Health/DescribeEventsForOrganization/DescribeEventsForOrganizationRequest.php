<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEventsForOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\OrganizationEventFilter $filter
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 * @property string $locale
 */
class DescribeEventsForOrganizationRequest extends Request
{
    /**
     * @param array{
     *     filter?: Shapes\OrganizationEventFilter,
     *     nextToken?: string,
     *     maxResults?: int<1, 100>,
     *     locale?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
