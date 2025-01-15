<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEventsForOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\OrganizationEventFilter|null $filter
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property string|null $locale
 */
class DescribeEventsForOrganizationRequest extends Request
{
    /**
     * @param array{
     *     filter?: Shapes\OrganizationEventFilter|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     locale?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
