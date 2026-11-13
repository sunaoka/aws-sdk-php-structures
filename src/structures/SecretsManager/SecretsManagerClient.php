<?php

namespace Sunaoka\Aws\Structures\SecretsManager;

class SecretsManagerClient extends \Aws\SecretsManager\SecretsManagerClient
{
    use AssociateCrossAccountReplica\AssociateCrossAccountReplicaTrait;
    use BatchGetSecretValue\BatchGetSecretValueTrait;
    use CancelRotateSecret\CancelRotateSecretTrait;
    use CreateSecret\CreateSecretTrait;
    use DeleteResourcePolicy\DeleteResourcePolicyTrait;
    use DeleteSecret\DeleteSecretTrait;
    use DescribeSecret\DescribeSecretTrait;
    use DisassociateCrossAccountReplica\DisassociateCrossAccountReplicaTrait;
    use GetRandomPassword\GetRandomPasswordTrait;
    use GetResourcePolicy\GetResourcePolicyTrait;
    use GetSecretValue\GetSecretValueTrait;
    use ListResourcePolicies\ListResourcePoliciesTrait;
    use ListSecretVersionIds\ListSecretVersionIdsTrait;
    use ListSecrets\ListSecretsTrait;
    use PutResourcePolicy\PutResourcePolicyTrait;
    use PutSecretValue\PutSecretValueTrait;
    use RemoveRegionsFromReplication\RemoveRegionsFromReplicationTrait;
    use ReplicateSecretToRegions\ReplicateSecretToRegionsTrait;
    use RestoreSecret\RestoreSecretTrait;
    use RotateSecret\RotateSecretTrait;
    use StopReplicationToReplica\StopReplicationToReplicaTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateSecret\UpdateSecretTrait;
    use UpdateSecretVersionStage\UpdateSecretVersionStageTrait;
    use ValidateResourcePolicy\ValidateResourcePolicyTrait;
}
