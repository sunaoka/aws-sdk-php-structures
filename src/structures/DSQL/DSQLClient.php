<?php

namespace Sunaoka\Aws\Structures\DSQL;

class DSQLClient extends \Aws\DSQL\DSQLClient
{
    use CreateCluster\CreateClusterTrait;
    use CreateMultiRegionClusters\CreateMultiRegionClustersTrait;
    use DeleteCluster\DeleteClusterTrait;
    use DeleteMultiRegionClusters\DeleteMultiRegionClustersTrait;
    use GetCluster\GetClusterTrait;
    use ListClusters\ListClustersTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateCluster\UpdateClusterTrait;
}
