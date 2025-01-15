<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEventDetailsForOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\EventAccountFilter> $organizationEventDetailFilters
 * @property string|null $locale
 */
class DescribeEventDetailsForOrganizationRequest extends Request
{
    /**
     * @param array{
     *     organizationEventDetailFilters: list<Shapes\EventAccountFilter>,
     *     locale?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
