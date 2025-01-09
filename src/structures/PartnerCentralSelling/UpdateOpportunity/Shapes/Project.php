<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\UpdateOpportunity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AdditionalComments
 * @property list<string> $ApnPrograms
 * @property 'Oracle Cloud'|'On-Prem'|'Co-location'|'Akamai'|'AliCloud'|'Google Cloud Platform'|'IBM Softlayer'|'Microsoft Azure'|'Other- Cost Optimization'|'No Competition'|'*Other' $CompetitorName
 * @property string $CustomerBusinessProblem
 * @property string $CustomerUseCase
 * @property list<'SaaS or PaaS'|'BYOL or AMI'|'Managed Services'|'Professional Services'|'Resell'|'Other'> $DeliveryModels
 * @property list<ExpectedCustomerSpend> $ExpectedCustomerSpend
 * @property string $OtherCompetitorNames
 * @property string $OtherSolutionDescription
 * @property string $RelatedOpportunityIdentifier
 * @property list<'Initialized discussions with customer'|'Customer has shown interest in solution'|'Conducted POC / Demo'|'In evaluation / planning stage'|'Agreed on solution to Business Problem'|'Completed Action Plan'|'Finalized Deployment Need'|'SOW Signed'> $SalesActivities
 * @property string $Title
 */
class Project extends Shape
{
    /**
     * @param array{
     *     AdditionalComments?: string,
     *     ApnPrograms?: list<string>,
     *     CompetitorName?: 'Oracle Cloud'|'On-Prem'|'Co-location'|'Akamai'|'AliCloud'|'Google Cloud Platform'|'IBM Softlayer'|'Microsoft Azure'|'Other- Cost Optimization'|'No Competition'|'*Other',
     *     CustomerBusinessProblem?: string,
     *     CustomerUseCase?: string,
     *     DeliveryModels?: list<'SaaS or PaaS'|'BYOL or AMI'|'Managed Services'|'Professional Services'|'Resell'|'Other'>,
     *     ExpectedCustomerSpend?: list<ExpectedCustomerSpend>,
     *     OtherCompetitorNames?: string,
     *     OtherSolutionDescription?: string,
     *     RelatedOpportunityIdentifier?: string,
     *     SalesActivities?: list<'Initialized discussions with customer'|'Customer has shown interest in solution'|'Conducted POC / Demo'|'In evaluation / planning stage'|'Agreed on solution to Business Problem'|'Completed Action Plan'|'Finalized Deployment Need'|'SOW Signed'>,
     *     Title?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
