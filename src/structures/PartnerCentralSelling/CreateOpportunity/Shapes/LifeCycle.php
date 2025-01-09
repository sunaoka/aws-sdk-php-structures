<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\CreateOpportunity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Customer Deficiency'|'Delay / Cancellation of Project'|'Legal / Tax / Regulatory'|'Lost to Competitor - Google'|'Lost to Competitor - Microsoft'|'Lost to Competitor - SoftLayer'|'Lost to Competitor - VMWare'|'Lost to Competitor - Other'|'No Opportunity'|'On Premises Deployment'|'Partner Gap'|'Price'|'Security / Compliance'|'Technical Limitations'|'Customer Experience'|'Other'|'People/Relationship/Governance'|'Product/Technology'|'Financial/Commercial' $ClosedLostReason
 * @property string $NextSteps
 * @property list<NextStepsHistory> $NextStepsHistory
 * @property string $ReviewComments
 * @property 'Pending Submission'|'Submitted'|'In review'|'Approved'|'Rejected'|'Action Required' $ReviewStatus
 * @property string $ReviewStatusReason
 * @property 'Prospect'|'Qualified'|'Technical Validation'|'Business Validation'|'Committed'|'Launched'|'Closed Lost' $Stage
 * @property string $TargetCloseDate
 */
class LifeCycle extends Shape
{
    /**
     * @param array{
     *     ClosedLostReason?: 'Customer Deficiency'|'Delay / Cancellation of Project'|'Legal / Tax / Regulatory'|'Lost to Competitor - Google'|'Lost to Competitor - Microsoft'|'Lost to Competitor - SoftLayer'|'Lost to Competitor - VMWare'|'Lost to Competitor - Other'|'No Opportunity'|'On Premises Deployment'|'Partner Gap'|'Price'|'Security / Compliance'|'Technical Limitations'|'Customer Experience'|'Other'|'People/Relationship/Governance'|'Product/Technology'|'Financial/Commercial',
     *     NextSteps?: string,
     *     NextStepsHistory?: list<NextStepsHistory>,
     *     ReviewComments?: string,
     *     ReviewStatus?: 'Pending Submission'|'Submitted'|'In review'|'Approved'|'Rejected'|'Action Required',
     *     ReviewStatusReason?: string,
     *     Stage?: 'Prospect'|'Qualified'|'Technical Validation'|'Business Validation'|'Committed'|'Launched'|'Closed Lost',
     *     TargetCloseDate?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
