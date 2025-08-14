<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\UpdateOpportunity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'SaaS or PaaS'|'BYOL or AMI'|'Managed Services'|'Professional Services'|'Resell'|'Other'>|null $DeliveryModels
 * @property list<ExpectedCustomerSpend>|null $ExpectedCustomerSpend
 * @property string|null $Title
 * @property list<string>|null $ApnPrograms
 * @property string|null $CustomerBusinessProblem
 * @property string|null $CustomerUseCase
 * @property string|null $RelatedOpportunityIdentifier
 * @property list<'Initialized discussions with customer'|'Customer has shown interest in solution'|'Conducted POC / Demo'|'In evaluation / planning stage'|'Agreed on solution to Business Problem'|'Completed Action Plan'|'Finalized Deployment Need'|'SOW Signed'>|null $SalesActivities
 * @property 'Oracle Cloud'|'On-Prem'|'Co-location'|'Akamai'|'AliCloud'|'Google Cloud Platform'|'IBM Softlayer'|'Microsoft Azure'|'Other- Cost Optimization'|'No Competition'|'*Other'|null $CompetitorName
 * @property string|null $OtherCompetitorNames
 * @property string|null $OtherSolutionDescription
 * @property string|null $AdditionalComments
 */
class Project extends Shape
{
    /**
     * @param array{
     *     DeliveryModels?: list<'SaaS or PaaS'|'BYOL or AMI'|'Managed Services'|'Professional Services'|'Resell'|'Other'>|null,
     *     ExpectedCustomerSpend?: list<ExpectedCustomerSpend>|null,
     *     Title?: string|null,
     *     ApnPrograms?: list<string>|null,
     *     CustomerBusinessProblem?: string|null,
     *     CustomerUseCase?: string|null,
     *     RelatedOpportunityIdentifier?: string|null,
     *     SalesActivities?: list<'Initialized discussions with customer'|'Customer has shown interest in solution'|'Conducted POC / Demo'|'In evaluation / planning stage'|'Agreed on solution to Business Problem'|'Completed Action Plan'|'Finalized Deployment Need'|'SOW Signed'>|null,
     *     CompetitorName?: 'Oracle Cloud'|'On-Prem'|'Co-location'|'Akamai'|'AliCloud'|'Google Cloud Platform'|'IBM Softlayer'|'Microsoft Azure'|'Other- Cost Optimization'|'No Competition'|'*Other'|null,
     *     OtherCompetitorNames?: string|null,
     *     OtherSolutionDescription?: string|null,
     *     AdditionalComments?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
