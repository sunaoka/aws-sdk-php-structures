<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless;

class RedshiftServerlessClient extends \Aws\RedshiftServerless\RedshiftServerlessClient
{
    use ConvertRecoveryPointToSnapshot\ConvertRecoveryPointToSnapshotTrait;
    use CreateEndpointAccess\CreateEndpointAccessTrait;
    use CreateNamespace\CreateNamespaceTrait;
    use CreateSnapshot\CreateSnapshotTrait;
    use CreateUsageLimit\CreateUsageLimitTrait;
    use CreateWorkgroup\CreateWorkgroupTrait;
    use DeleteEndpointAccess\DeleteEndpointAccessTrait;
    use DeleteNamespace\DeleteNamespaceTrait;
    use DeleteResourcePolicy\DeleteResourcePolicyTrait;
    use DeleteSnapshot\DeleteSnapshotTrait;
    use DeleteUsageLimit\DeleteUsageLimitTrait;
    use DeleteWorkgroup\DeleteWorkgroupTrait;
    use GetEndpointAccess\GetEndpointAccessTrait;
    use GetNamespace\GetNamespaceTrait;
    use GetRecoveryPoint\GetRecoveryPointTrait;
    use GetResourcePolicy\GetResourcePolicyTrait;
    use GetSnapshot\GetSnapshotTrait;
    use GetTableRestoreStatus\GetTableRestoreStatusTrait;
    use GetUsageLimit\GetUsageLimitTrait;
    use GetWorkgroup\GetWorkgroupTrait;
    use ListEndpointAccess\ListEndpointAccessTrait;
    use ListNamespaces\ListNamespacesTrait;
    use ListRecoveryPoints\ListRecoveryPointsTrait;
    use ListSnapshots\ListSnapshotsTrait;
    use ListTableRestoreStatus\ListTableRestoreStatusTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListUsageLimits\ListUsageLimitsTrait;
    use ListWorkgroups\ListWorkgroupsTrait;
    use PutResourcePolicy\PutResourcePolicyTrait;
    use RestoreFromRecoveryPoint\RestoreFromRecoveryPointTrait;
    use RestoreFromSnapshot\RestoreFromSnapshotTrait;
    use RestoreTableFromSnapshot\RestoreTableFromSnapshotTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateEndpointAccess\UpdateEndpointAccessTrait;
    use UpdateNamespace\UpdateNamespaceTrait;
    use UpdateSnapshot\UpdateSnapshotTrait;
    use UpdateUsageLimit\UpdateUsageLimitTrait;
    use UpdateWorkgroup\UpdateWorkgroupTrait;
}
