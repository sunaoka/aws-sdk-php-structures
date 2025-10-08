<?php

namespace Sunaoka\Aws\Structures\DSQL;

class DSQLClient extends \Aws\DSQL\DSQLClient
{
    use CreateCluster\CreateClusterTrait;
    use DeleteCluster\DeleteClusterTrait;
    use GetCluster\GetClusterTrait;
    use GetVpcEndpointServiceName\GetVpcEndpointServiceNameTrait;
    use ListClusters\ListClustersTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateCluster\UpdateClusterTrait;
}
