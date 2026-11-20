<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\SearchOpportunities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Pending Submission'|'Submitted'|'In review'|'Approved'|'Rejected'|'Action Required'|null $ReviewStatus
 * @property 'Prospect'|'Qualified'|'Technical Validation'|'Business Validation'|'Committed'|'Launched'|'Closed Lost'|null $Stage
 * @property string|null $NextSteps
 * @property string|null $TargetCloseDate
 */
class OpportunitySearchLifeCycle extends Shape
{
    /**
     * @param array{
     *     ReviewStatus?: 'Pending Submission'|'Submitted'|'In review'|'Approved'|'Rejected'|'Action Required'|null,
     *     Stage?: 'Prospect'|'Qualified'|'Technical Validation'|'Business Validation'|'Committed'|'Launched'|'Closed Lost'|null,
     *     NextSteps?: string|null,
     *     TargetCloseDate?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
