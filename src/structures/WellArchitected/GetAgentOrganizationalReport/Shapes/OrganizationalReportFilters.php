<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAgentOrganizationalReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $accountIds
 * @property list<string>|null $organizationalUnitIds
 * @property list<'COST_OPTIMIZATION'|'SECURITY'|'RESILIENCE'|'PERFORMANCE'|'OPERATIONAL_EXCELLENCE'>|null $pillars
 * @property list<'RESOURCE'|'ARCHITECTURE'|'APPLICATION'>|null $recommendationTypes
 * @property list<'ACTIVE'|'SUPPRESSED'|'COMPLETED'>|null $statuses
 * @property list<'HIGH'|'MEDIUM'|'LOW'>|null $priorities
 * @property TimeWindow|null $createdAtRange
 * @property TimeWindow|null $updatedAtRange
 */
class OrganizationalReportFilters extends Shape
{
    /**
     * @param array{
     *     accountIds?: list<string>|null,
     *     organizationalUnitIds?: list<string>|null,
     *     pillars?: list<'COST_OPTIMIZATION'|'SECURITY'|'RESILIENCE'|'PERFORMANCE'|'OPERATIONAL_EXCELLENCE'>|null,
     *     recommendationTypes?: list<'RESOURCE'|'ARCHITECTURE'|'APPLICATION'>|null,
     *     statuses?: list<'ACTIVE'|'SUPPRESSED'|'COMPLETED'>|null,
     *     priorities?: list<'HIGH'|'MEDIUM'|'LOW'>|null,
     *     createdAtRange?: TimeWindow|null,
     *     updatedAtRange?: TimeWindow|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
