<?php

namespace Sunaoka\Aws\Structures\Support\DescribeCases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $caseId
 * @property string|null $displayId
 * @property string|null $subject
 * @property string|null $status
 * @property string|null $serviceCode
 * @property string|null $categoryCode
 * @property string|null $severityCode
 * @property string|null $submittedBy
 * @property string|null $timeCreated
 * @property RecentCaseCommunications|null $recentCommunications
 * @property list<string>|null $ccEmailAddresses
 * @property string|null $language
 */
class CaseDetails extends Shape
{
    /**
     * @param array{
     *     caseId?: string|null,
     *     displayId?: string|null,
     *     subject?: string|null,
     *     status?: string|null,
     *     serviceCode?: string|null,
     *     categoryCode?: string|null,
     *     severityCode?: string|null,
     *     submittedBy?: string|null,
     *     timeCreated?: string|null,
     *     recentCommunications?: RecentCaseCommunications|null,
     *     ccEmailAddresses?: list<string>|null,
     *     language?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
