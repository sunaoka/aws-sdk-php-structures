<?php

namespace Sunaoka\Aws\Structures\PartnerCentralBenefits\ListBenefitApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property list<string>|null $Programs
 * @property list<'CREDITS'|'CASH'|'ACCESS'>|null $FulfillmentTypes
 * @property list<string>|null $BenefitIdentifiers
 * @property list<'PENDING_SUBMISSION'|'IN_REVIEW'|'ACTION_REQUIRED'|'APPROVED'|'REJECTED'|'CANCELED'>|null $Status
 * @property list<string>|null $Stages
 * @property list<Shapes\AssociatedResource>|null $AssociatedResources
 * @property list<string>|null $AssociatedResourceArns
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListBenefitApplicationsRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     Programs?: list<string>|null,
     *     FulfillmentTypes?: list<'CREDITS'|'CASH'|'ACCESS'>|null,
     *     BenefitIdentifiers?: list<string>|null,
     *     Status?: list<'PENDING_SUBMISSION'|'IN_REVIEW'|'ACTION_REQUIRED'|'APPROVED'|'REJECTED'|'CANCELED'>|null,
     *     Stages?: list<string>|null,
     *     AssociatedResources?: list<Shapes\AssociatedResource>|null,
     *     AssociatedResourceArns?: list<string>|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
