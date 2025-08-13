<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\UpdateOpportunity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Prospect'|'Qualified'|'Technical Validation'|'Business Validation'|'Committed'|'Launched'|'Closed Lost'|null $Stage
 * @property 'Customer Deficiency'|'Delay / Cancellation of Project'|'Legal / Tax / Regulatory'|'Lost to Competitor - Google'|'Lost to Competitor - Microsoft'|'Lost to Competitor - SoftLayer'|'Lost to Competitor - VMWare'|'Lost to Competitor - Other'|'No Opportunity'|'On Premises Deployment'|'Partner Gap'|'Price'|'Security / Compliance'|'Technical Limitations'|'Customer Experience'|'Other'|'People/Relationship/Governance'|'Product/Technology'|'Financial/Commercial'|null $ClosedLostReason
 * @property string|null $NextSteps
 * @property string|null $TargetCloseDate
 * @property 'Pending Submission'|'Submitted'|'In review'|'Approved'|'Rejected'|'Action Required'|null $ReviewStatus
 * @property string|null $ReviewComments
 * @property string|null $ReviewStatusReason
 * @property list<NextStepsHistory>|null $NextStepsHistory
 */
class LifeCycle extends Shape
{
    /**
     * @param array{
     *     Stage?: 'Prospect'|'Qualified'|'Technical Validation'|'Business Validation'|'Committed'|'Launched'|'Closed Lost'|null,
     *     ClosedLostReason?: 'Customer Deficiency'|'Delay / Cancellation of Project'|'Legal / Tax / Regulatory'|'Lost to Competitor - Google'|'Lost to Competitor - Microsoft'|'Lost to Competitor - SoftLayer'|'Lost to Competitor - VMWare'|'Lost to Competitor - Other'|'No Opportunity'|'On Premises Deployment'|'Partner Gap'|'Price'|'Security / Compliance'|'Technical Limitations'|'Customer Experience'|'Other'|'People/Relationship/Governance'|'Product/Technology'|'Financial/Commercial'|null,
     *     NextSteps?: string|null,
     *     TargetCloseDate?: string|null,
     *     ReviewStatus?: 'Pending Submission'|'Submitted'|'In review'|'Approved'|'Rejected'|'Action Required'|null,
     *     ReviewComments?: string|null,
     *     ReviewStatusReason?: string|null,
     *     NextStepsHistory?: list<NextStepsHistory>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
