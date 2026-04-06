<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetResourceSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CustomerUseCase
 * @property list<'SaaS or PaaS'|'BYOL or AMI'|'Managed Services'|'Professional Services'|'Resell'|'Other'>|null $DeliveryModels
 * @property list<ExpectedCustomerSpend>|null $ExpectedCustomerSpend
 * @property string|null $OtherSolutionDescription
 * @property list<'Initialized discussions with customer'|'Customer has shown interest in solution'|'Conducted POC / Demo'|'In evaluation / planning stage'|'Agreed on solution to Business Problem'|'Completed Action Plan'|'Finalized Deployment Need'|'SOW Signed'>|null $SalesActivities
 */
class ProjectView extends Shape
{
    /**
     * @param array{
     *     CustomerUseCase?: string|null,
     *     DeliveryModels?: list<'SaaS or PaaS'|'BYOL or AMI'|'Managed Services'|'Professional Services'|'Resell'|'Other'>|null,
     *     ExpectedCustomerSpend?: list<ExpectedCustomerSpend>|null,
     *     OtherSolutionDescription?: string|null,
     *     SalesActivities?: list<'Initialized discussions with customer'|'Customer has shown interest in solution'|'Conducted POC / Demo'|'In evaluation / planning stage'|'Agreed on solution to Business Problem'|'Completed Action Plan'|'Finalized Deployment Need'|'SOW Signed'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
