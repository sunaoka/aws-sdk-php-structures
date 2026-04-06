<?php

namespace Sunaoka\Aws\Structures\PCS;

class PCSClient extends \Aws\PCS\PCSClient
{
    use CreateCluster\CreateClusterTrait;
    use CreateComputeNodeGroup\CreateComputeNodeGroupTrait;
    use CreateQueue\CreateQueueTrait;
    use DeleteCluster\DeleteClusterTrait;
    use DeleteComputeNodeGroup\DeleteComputeNodeGroupTrait;
    use DeleteQueue\DeleteQueueTrait;
    use GetCluster\GetClusterTrait;
    use GetComputeNodeGroup\GetComputeNodeGroupTrait;
    use GetQueue\GetQueueTrait;
    use ListClusters\ListClustersTrait;
    use ListComputeNodeGroups\ListComputeNodeGroupsTrait;
    use ListQueues\ListQueuesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use RegisterComputeNodeGroupInstance\RegisterComputeNodeGroupInstanceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateCluster\UpdateClusterTrait;
    use UpdateComputeNodeGroup\UpdateComputeNodeGroupTrait;
    use UpdateQueue\UpdateQueueTrait;
}
