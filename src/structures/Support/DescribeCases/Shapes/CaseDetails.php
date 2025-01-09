<?php

namespace Sunaoka\Aws\Structures\Support\DescribeCases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $caseId
 * @property string $displayId
 * @property string $subject
 * @property string $status
 * @property string $serviceCode
 * @property string $categoryCode
 * @property string $severityCode
 * @property string $submittedBy
 * @property string $timeCreated
 * @property RecentCaseCommunications $recentCommunications
 * @property list<string> $ccEmailAddresses
 * @property string $language
 */
class CaseDetails extends Shape
{
    /**
     * @param array{
     *     caseId?: string,
     *     displayId?: string,
     *     subject?: string,
     *     status?: string,
     *     serviceCode?: string,
     *     categoryCode?: string,
     *     severityCode?: string,
     *     submittedBy?: string,
     *     timeCreated?: string,
     *     recentCommunications?: RecentCaseCommunications,
     *     ccEmailAddresses?: list<string>,
     *     language?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
