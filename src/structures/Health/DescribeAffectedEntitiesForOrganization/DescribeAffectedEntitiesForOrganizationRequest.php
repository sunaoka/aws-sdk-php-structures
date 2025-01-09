<?php

namespace Sunaoka\Aws\Structures\Health\DescribeAffectedEntitiesForOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\EventAccountFilter> $organizationEntityFilters
 * @property string $locale
 * @property string $nextToken
 * @property int $maxResults
 * @property list<Shapes\EntityAccountFilter> $organizationEntityAccountFilters
 */
class DescribeAffectedEntitiesForOrganizationRequest extends Request
{
    /**
     * @param array{
     *     organizationEntityFilters?: list<Shapes\EventAccountFilter>,
     *     locale?: string,
     *     nextToken?: string,
     *     maxResults?: int,
     *     organizationEntityAccountFilters?: list<Shapes\EntityAccountFilter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
