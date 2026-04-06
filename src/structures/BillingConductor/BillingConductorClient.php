<?php

namespace Sunaoka\Aws\Structures\BillingConductor;

class BillingConductorClient extends \Aws\BillingConductor\BillingConductorClient
{
    use AssociateAccounts\AssociateAccountsTrait;
    use AssociatePricingRules\AssociatePricingRulesTrait;
    use BatchAssociateResourcesToCustomLineItem\BatchAssociateResourcesToCustomLineItemTrait;
    use BatchDisassociateResourcesFromCustomLineItem\BatchDisassociateResourcesFromCustomLineItemTrait;
    use CreateBillingGroup\CreateBillingGroupTrait;
    use CreateCustomLineItem\CreateCustomLineItemTrait;
    use CreatePricingPlan\CreatePricingPlanTrait;
    use CreatePricingRule\CreatePricingRuleTrait;
    use DeleteBillingGroup\DeleteBillingGroupTrait;
    use DeleteCustomLineItem\DeleteCustomLineItemTrait;
    use DeletePricingPlan\DeletePricingPlanTrait;
    use DeletePricingRule\DeletePricingRuleTrait;
    use DisassociateAccounts\DisassociateAccountsTrait;
    use DisassociatePricingRules\DisassociatePricingRulesTrait;
    use GetBillingGroupCostReport\GetBillingGroupCostReportTrait;
    use ListAccountAssociations\ListAccountAssociationsTrait;
    use ListBillingGroupCostReports\ListBillingGroupCostReportsTrait;
    use ListBillingGroups\ListBillingGroupsTrait;
    use ListCustomLineItemVersions\ListCustomLineItemVersionsTrait;
    use ListCustomLineItems\ListCustomLineItemsTrait;
    use ListPricingPlans\ListPricingPlansTrait;
    use ListPricingPlansAssociatedWithPricingRule\ListPricingPlansAssociatedWithPricingRuleTrait;
    use ListPricingRules\ListPricingRulesTrait;
    use ListPricingRulesAssociatedToPricingPlan\ListPricingRulesAssociatedToPricingPlanTrait;
    use ListResourcesAssociatedToCustomLineItem\ListResourcesAssociatedToCustomLineItemTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateBillingGroup\UpdateBillingGroupTrait;
    use UpdateCustomLineItem\UpdateCustomLineItemTrait;
    use UpdatePricingPlan\UpdatePricingPlanTrait;
    use UpdatePricingRule\UpdatePricingRuleTrait;
}
