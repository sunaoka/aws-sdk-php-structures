<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEventDetailsForOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\EventAccountFilter> $organizationEventDetailFilters
 * @property string $locale
 */
class DescribeEventDetailsForOrganizationRequest extends Request
{
    /**
     * @param array{
     *     organizationEventDetailFilters: list<Shapes\EventAccountFilter>,
     *     locale?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
