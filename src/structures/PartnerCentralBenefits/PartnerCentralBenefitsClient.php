<?php

namespace Sunaoka\Aws\Structures\PartnerCentralBenefits;

class PartnerCentralBenefitsClient extends \Aws\PartnerCentralBenefits\PartnerCentralBenefitsClient
{
    use AmendBenefitApplication\AmendBenefitApplicationTrait;
    use AssociateBenefitApplicationResource\AssociateBenefitApplicationResourceTrait;
    use CancelBenefitApplication\CancelBenefitApplicationTrait;
    use CreateBenefitApplication\CreateBenefitApplicationTrait;
    use DisassociateBenefitApplicationResource\DisassociateBenefitApplicationResourceTrait;
    use GetBenefit\GetBenefitTrait;
    use GetBenefitAllocation\GetBenefitAllocationTrait;
    use GetBenefitApplication\GetBenefitApplicationTrait;
    use ListBenefitAllocations\ListBenefitAllocationsTrait;
    use ListBenefitApplications\ListBenefitApplicationsTrait;
    use ListBenefits\ListBenefitsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use RecallBenefitApplication\RecallBenefitApplicationTrait;
    use SubmitBenefitApplication\SubmitBenefitApplicationTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateBenefitApplication\UpdateBenefitApplicationTrait;
}
