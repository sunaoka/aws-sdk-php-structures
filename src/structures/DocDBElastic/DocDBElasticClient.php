<?php

namespace Sunaoka\Aws\Structures\DocDBElastic;

class DocDBElasticClient extends \Aws\DocDBElastic\DocDBElasticClient
{
    use ApplyPendingMaintenanceAction\ApplyPendingMaintenanceActionTrait;
    use CopyClusterSnapshot\CopyClusterSnapshotTrait;
    use CreateCluster\CreateClusterTrait;
    use CreateClusterSnapshot\CreateClusterSnapshotTrait;
    use DeleteCluster\DeleteClusterTrait;
    use DeleteClusterSnapshot\DeleteClusterSnapshotTrait;
    use GetCluster\GetClusterTrait;
    use GetClusterSnapshot\GetClusterSnapshotTrait;
    use GetPendingMaintenanceAction\GetPendingMaintenanceActionTrait;
    use ListClusterSnapshots\ListClusterSnapshotsTrait;
    use ListClusters\ListClustersTrait;
    use ListPendingMaintenanceActions\ListPendingMaintenanceActionsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use RestoreClusterFromSnapshot\RestoreClusterFromSnapshotTrait;
    use StartCluster\StartClusterTrait;
    use StopCluster\StopClusterTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateCluster\UpdateClusterTrait;
}
