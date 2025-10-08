<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness;

class Route53RecoveryReadinessClient extends \Aws\Route53RecoveryReadiness\Route53RecoveryReadinessClient
{
    use CreateCell\CreateCellTrait;
    use CreateCrossAccountAuthorization\CreateCrossAccountAuthorizationTrait;
    use CreateReadinessCheck\CreateReadinessCheckTrait;
    use CreateRecoveryGroup\CreateRecoveryGroupTrait;
    use CreateResourceSet\CreateResourceSetTrait;
    use DeleteCell\DeleteCellTrait;
    use DeleteCrossAccountAuthorization\DeleteCrossAccountAuthorizationTrait;
    use DeleteReadinessCheck\DeleteReadinessCheckTrait;
    use DeleteRecoveryGroup\DeleteRecoveryGroupTrait;
    use DeleteResourceSet\DeleteResourceSetTrait;
    use GetArchitectureRecommendations\GetArchitectureRecommendationsTrait;
    use GetCell\GetCellTrait;
    use GetCellReadinessSummary\GetCellReadinessSummaryTrait;
    use GetReadinessCheck\GetReadinessCheckTrait;
    use GetReadinessCheckResourceStatus\GetReadinessCheckResourceStatusTrait;
    use GetReadinessCheckStatus\GetReadinessCheckStatusTrait;
    use GetRecoveryGroup\GetRecoveryGroupTrait;
    use GetRecoveryGroupReadinessSummary\GetRecoveryGroupReadinessSummaryTrait;
    use GetResourceSet\GetResourceSetTrait;
    use ListCells\ListCellsTrait;
    use ListCrossAccountAuthorizations\ListCrossAccountAuthorizationsTrait;
    use ListReadinessChecks\ListReadinessChecksTrait;
    use ListRecoveryGroups\ListRecoveryGroupsTrait;
    use ListResourceSets\ListResourceSetsTrait;
    use ListRules\ListRulesTrait;
    use ListTagsForResources\ListTagsForResourcesTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateCell\UpdateCellTrait;
    use UpdateReadinessCheck\UpdateReadinessCheckTrait;
    use UpdateRecoveryGroup\UpdateRecoveryGroupTrait;
    use UpdateResourceSet\UpdateResourceSetTrait;
}
