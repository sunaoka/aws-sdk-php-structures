<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator;

class BCMPricingCalculatorClient extends \Aws\BCMPricingCalculator\BCMPricingCalculatorClient
{
    use BatchCreateBillScenarioCommitmentModification\BatchCreateBillScenarioCommitmentModificationTrait;
    use BatchCreateBillScenarioUsageModification\BatchCreateBillScenarioUsageModificationTrait;
    use BatchCreateWorkloadEstimateUsage\BatchCreateWorkloadEstimateUsageTrait;
    use BatchDeleteBillScenarioCommitmentModification\BatchDeleteBillScenarioCommitmentModificationTrait;
    use BatchDeleteBillScenarioUsageModification\BatchDeleteBillScenarioUsageModificationTrait;
    use BatchDeleteWorkloadEstimateUsage\BatchDeleteWorkloadEstimateUsageTrait;
    use BatchUpdateBillScenarioCommitmentModification\BatchUpdateBillScenarioCommitmentModificationTrait;
    use BatchUpdateBillScenarioUsageModification\BatchUpdateBillScenarioUsageModificationTrait;
    use BatchUpdateWorkloadEstimateUsage\BatchUpdateWorkloadEstimateUsageTrait;
    use CreateBillEstimate\CreateBillEstimateTrait;
    use CreateBillScenario\CreateBillScenarioTrait;
    use CreateWorkloadEstimate\CreateWorkloadEstimateTrait;
    use DeleteBillEstimate\DeleteBillEstimateTrait;
    use DeleteBillScenario\DeleteBillScenarioTrait;
    use DeleteWorkloadEstimate\DeleteWorkloadEstimateTrait;
    use GetBillEstimate\GetBillEstimateTrait;
    use GetBillScenario\GetBillScenarioTrait;
    use GetPreferences\GetPreferencesTrait;
    use GetWorkloadEstimate\GetWorkloadEstimateTrait;
    use ListBillEstimateCommitments\ListBillEstimateCommitmentsTrait;
    use ListBillEstimateInputCommitmentModifications\ListBillEstimateInputCommitmentModificationsTrait;
    use ListBillEstimateInputUsageModifications\ListBillEstimateInputUsageModificationsTrait;
    use ListBillEstimateLineItems\ListBillEstimateLineItemsTrait;
    use ListBillEstimates\ListBillEstimatesTrait;
    use ListBillScenarioCommitmentModifications\ListBillScenarioCommitmentModificationsTrait;
    use ListBillScenarioUsageModifications\ListBillScenarioUsageModificationsTrait;
    use ListBillScenarios\ListBillScenariosTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListWorkloadEstimateUsage\ListWorkloadEstimateUsageTrait;
    use ListWorkloadEstimates\ListWorkloadEstimatesTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateBillEstimate\UpdateBillEstimateTrait;
    use UpdateBillScenario\UpdateBillScenarioTrait;
    use UpdatePreferences\UpdatePreferencesTrait;
    use UpdateWorkloadEstimate\UpdateWorkloadEstimateTrait;
}
