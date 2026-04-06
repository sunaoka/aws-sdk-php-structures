<?php

namespace Sunaoka\Aws\Structures\Health\DescribeAffectedEntitiesForOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\EventAccountFilter> $organizationEntityFilters
 * @property string|null $locale
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class DescribeAffectedEntitiesForOrganizationRequest extends Request
{
    /**
     * @param array{
     *     organizationEntityFilters: list<Shapes\EventAccountFilter>,
     *     locale?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
