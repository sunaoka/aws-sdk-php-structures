<?php

namespace Sunaoka\Aws\Structures\Billing;

class BillingClient extends \Aws\Billing\BillingClient
{
    use AssociateContract\AssociateContractTrait;
    use AssociateSourceViews\AssociateSourceViewsTrait;
    use CancelContractualInvestmentAttestation\CancelContractualInvestmentAttestationTrait;
    use CreateBillingView\CreateBillingViewTrait;
    use CreateContractualInvestmentAttestation\CreateContractualInvestmentAttestationTrait;
    use DeleteBillingView\DeleteBillingViewTrait;
    use DisassociateContract\DisassociateContractTrait;
    use DisassociateSourceViews\DisassociateSourceViewsTrait;
    use GetBillingPreferences\GetBillingPreferencesTrait;
    use GetBillingView\GetBillingViewTrait;
    use GetContractInformation\GetContractInformationTrait;
    use GetCreditAllocationHistory\GetCreditAllocationHistoryTrait;
    use GetCredits\GetCreditsTrait;
    use GetEnterpriseSupportChargeSummary\GetEnterpriseSupportChargeSummaryTrait;
    use GetEnterpriseSupportContractDetails\GetEnterpriseSupportContractDetailsTrait;
    use GetResourcePolicy\GetResourcePolicyTrait;
    use ListBillingViewSegments\ListBillingViewSegmentsTrait;
    use ListBillingViews\ListBillingViewsTrait;
    use ListBusinessSupportAccountCharges\ListBusinessSupportAccountChargesTrait;
    use ListBusinessSupportSubscriptionHistory\ListBusinessSupportSubscriptionHistoryTrait;
    use ListContracts\ListContractsTrait;
    use ListContractualInvestmentAttestations\ListContractualInvestmentAttestationsTrait;
    use ListContractualInvestmentSummaries\ListContractualInvestmentSummariesTrait;
    use ListContractualInvestments\ListContractualInvestmentsTrait;
    use ListEnterpriseSupportLinkedAccountCharges\ListEnterpriseSupportLinkedAccountChargesTrait;
    use ListSourceViewsForBillingView\ListSourceViewsForBillingViewTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use RedeemCredits\RedeemCreditsTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateBillingPreferences\UpdateBillingPreferencesTrait;
    use UpdateBillingView\UpdateBillingViewTrait;
}
