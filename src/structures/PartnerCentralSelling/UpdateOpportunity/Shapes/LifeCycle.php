<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\UpdateOpportunity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Customer Deficiency'|'Delay / Cancellation of Project'|'Legal / Tax / Regulatory'|'Lost to Competitor - Google'|'Lost to Competitor - Microsoft'|'Lost to Competitor - SoftLayer'|'Lost to Competitor - VMWare'|'Lost to Competitor - Other'|'No Opportunity'|'On Premises Deployment'|'Partner Gap'|'Price'|'Security / Compliance'|'Technical Limitations'|'Customer Experience'|'Other'|'People/Relationship/Governance'|'Product/Technology'|'Financial/Commercial'|null $ClosedLostReason
 * @property string|null $NextSteps
 * @property list<NextStepsHistory>|null $NextStepsHistory
 * @property string|null $ReviewComments
 * @property 'Pending Submission'|'Submitted'|'In review'|'Approved'|'Rejected'|'Action Required'|null $ReviewStatus
 * @property string|null $ReviewStatusReason
 * @property 'Prospect'|'Qualified'|'Technical Validation'|'Business Validation'|'Committed'|'Launched'|'Closed Lost'|null $Stage
 * @property string|null $TargetCloseDate
 */
class LifeCycle extends Shape
{
    /**
     * @param array{
     *     ClosedLostReason?: 'Customer Deficiency'|'Delay / Cancellation of Project'|'Legal / Tax / Regulatory'|'Lost to Competitor - Google'|'Lost to Competitor - Microsoft'|'Lost to Competitor - SoftLayer'|'Lost to Competitor - VMWare'|'Lost to Competitor - Other'|'No Opportunity'|'On Premises Deployment'|'Partner Gap'|'Price'|'Security / Compliance'|'Technical Limitations'|'Customer Experience'|'Other'|'People/Relationship/Governance'|'Product/Technology'|'Financial/Commercial'|null,
     *     NextSteps?: string|null,
     *     NextStepsHistory?: list<NextStepsHistory>|null,
     *     ReviewComments?: string|null,
     *     ReviewStatus?: 'Pending Submission'|'Submitted'|'In review'|'Approved'|'Rejected'|'Action Required'|null,
     *     ReviewStatusReason?: string|null,
     *     Stage?: 'Prospect'|'Qualified'|'Technical Validation'|'Business Validation'|'Committed'|'Launched'|'Closed Lost'|null,
     *     TargetCloseDate?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
