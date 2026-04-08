<?php

namespace Sunaoka\Aws\Structures\Outposts\GetOutpostBillingInformation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $NextToken
 * @property list<Shapes\Subscription>|null $Subscriptions
 * @property string|null $ContractEndDate
 * @property 'THREE_YEARS'|'ONE_YEAR'|'FIVE_YEARS'|null $PaymentTerm
 * @property 'ALL_UPFRONT'|'NO_UPFRONT'|'PARTIAL_UPFRONT'|null $PaymentOption
 */
class GetOutpostBillingInformationResponse extends Response
{
}
