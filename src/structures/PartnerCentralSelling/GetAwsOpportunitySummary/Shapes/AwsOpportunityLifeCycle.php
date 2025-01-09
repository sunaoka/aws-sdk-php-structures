<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetAwsOpportunitySummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Administrative'|'Business Associate Agreement'|'Company Acquired/Dissolved'|'Competitive Offering'|'Customer Data Requirement'|'Customer Deficiency'|'Customer Experience'|'Delay / Cancellation of Project'|'Duplicate'|'Duplicate Opportunity'|'Executive Blocker'|'Failed Vetting'|'Feature Limitation'|'Financial/Commercial'|'Insufficient Amazon Value'|'Insufficient AWS Value'|'International Constraints'|'Legal / Tax / Regulatory'|'Legal Terms and Conditions'|'Lost to Competitor'|'Lost to Competitor - Google'|'Lost to Competitor - Microsoft'|'Lost to Competitor - Other'|'Lost to Competitor - Rackspace'|'Lost to Competitor - SoftLayer'|'Lost to Competitor - VMWare'|'No Customer Reference'|'No Integration Resources'|'No Opportunity'|'No Perceived Value of MP'|'No Response'|'Not Committed to AWS'|'No Update'|'On Premises Deployment'|'Other'|'Other (Details in Description)'|'Partner Gap'|'Past Due'|'People/Relationship/Governance'|'Platform Technology Limitation'|'Preference for Competitor'|'Price'|'Product/Technology'|'Product Not on AWS'|'Security / Compliance'|'Self-Service'|'Technical Limitations'|'Term Sheet Impasse' $ClosedLostReason
 * @property string $NextSteps
 * @property list<ProfileNextStepsHistory> $NextStepsHistory
 * @property 'Not Started'|'In Progress'|'Prospect'|'Engaged'|'Identified'|'Qualify'|'Research'|'Seller Engaged'|'Evaluating'|'Seller Registered'|'Term Sheet Negotiation'|'Contract Negotiation'|'Onboarding'|'Building Integration'|'Qualified'|'On-hold'|'Technical Validation'|'Business Validation'|'Committed'|'Launched'|'Deferred to Partner'|'Closed Lost'|'Completed'|'Closed Incomplete' $Stage
 * @property string $TargetCloseDate
 */
class AwsOpportunityLifeCycle extends Shape
{
    /**
     * @param array{
     *     ClosedLostReason?: 'Administrative'|'Business Associate Agreement'|'Company Acquired/Dissolved'|'Competitive Offering'|'Customer Data Requirement'|'Customer Deficiency'|'Customer Experience'|'Delay / Cancellation of Project'|'Duplicate'|'Duplicate Opportunity'|'Executive Blocker'|'Failed Vetting'|'Feature Limitation'|'Financial/Commercial'|'Insufficient Amazon Value'|'Insufficient AWS Value'|'International Constraints'|'Legal / Tax / Regulatory'|'Legal Terms and Conditions'|'Lost to Competitor'|'Lost to Competitor - Google'|'Lost to Competitor - Microsoft'|'Lost to Competitor - Other'|'Lost to Competitor - Rackspace'|'Lost to Competitor - SoftLayer'|'Lost to Competitor - VMWare'|'No Customer Reference'|'No Integration Resources'|'No Opportunity'|'No Perceived Value of MP'|'No Response'|'Not Committed to AWS'|'No Update'|'On Premises Deployment'|'Other'|'Other (Details in Description)'|'Partner Gap'|'Past Due'|'People/Relationship/Governance'|'Platform Technology Limitation'|'Preference for Competitor'|'Price'|'Product/Technology'|'Product Not on AWS'|'Security / Compliance'|'Self-Service'|'Technical Limitations'|'Term Sheet Impasse',
     *     NextSteps?: string,
     *     NextStepsHistory?: list<ProfileNextStepsHistory>,
     *     Stage?: 'Not Started'|'In Progress'|'Prospect'|'Engaged'|'Identified'|'Qualify'|'Research'|'Seller Engaged'|'Evaluating'|'Seller Registered'|'Term Sheet Negotiation'|'Contract Negotiation'|'Onboarding'|'Building Integration'|'Qualified'|'On-hold'|'Technical Validation'|'Business Validation'|'Committed'|'Launched'|'Deferred to Partner'|'Closed Lost'|'Completed'|'Closed Incomplete',
     *     TargetCloseDate?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
