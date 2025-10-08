<?php

namespace Sunaoka\Aws\Structures\Billing;

class BillingClient extends \Aws\Billing\BillingClient
{
    use AssociateSourceViews\AssociateSourceViewsTrait;
    use CreateBillingView\CreateBillingViewTrait;
    use DeleteBillingView\DeleteBillingViewTrait;
    use DisassociateSourceViews\DisassociateSourceViewsTrait;
    use GetBillingView\GetBillingViewTrait;
    use GetResourcePolicy\GetResourcePolicyTrait;
    use ListBillingViews\ListBillingViewsTrait;
    use ListSourceViewsForBillingView\ListSourceViewsForBillingViewTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateBillingView\UpdateBillingViewTrait;
}
