<?php

namespace Sunaoka\Aws\Structures\Billing;

class BillingClient extends \Aws\Billing\BillingClient
{
    use AssociateSourceViews\AssociateSourceViewsTrait;
    use CreateBillingView\CreateBillingViewTrait;
    use DeleteBillingView\DeleteBillingViewTrait;
    use DisassociateSourceViews\DisassociateSourceViewsTrait;
    use GetBillingPreferences\GetBillingPreferencesTrait;
    use GetBillingView\GetBillingViewTrait;
    use GetCreditAllocationHistory\GetCreditAllocationHistoryTrait;
    use GetCredits\GetCreditsTrait;
    use GetResourcePolicy\GetResourcePolicyTrait;
    use ListBillingViews\ListBillingViewsTrait;
    use ListSourceViewsForBillingView\ListSourceViewsForBillingViewTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use RedeemCredits\RedeemCreditsTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateBillingPreferences\UpdateBillingPreferencesTrait;
    use UpdateBillingView\UpdateBillingViewTrait;
}
