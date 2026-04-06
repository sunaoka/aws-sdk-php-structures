<?php

namespace Sunaoka\Aws\Structures\DocDBElastic;

class DocDBElasticClient extends \Aws\DocDBElastic\DocDBElasticClient
{
    use CreateCluster\CreateClusterTrait;
    use CreateClusterSnapshot\CreateClusterSnapshotTrait;
    use DeleteCluster\DeleteClusterTrait;
    use DeleteClusterSnapshot\DeleteClusterSnapshotTrait;
    use GetCluster\GetClusterTrait;
    use GetClusterSnapshot\GetClusterSnapshotTrait;
    use ListClusterSnapshots\ListClusterSnapshotsTrait;
    use ListClusters\ListClustersTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use RestoreClusterFromSnapshot\RestoreClusterFromSnapshotTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateCluster\UpdateClusterTrait;
}
