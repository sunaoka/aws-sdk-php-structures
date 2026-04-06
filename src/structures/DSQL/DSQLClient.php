<?php

namespace Sunaoka\Aws\Structures\DSQL;

class DSQLClient extends \Aws\DSQL\DSQLClient
{
    use CreateCluster\CreateClusterTrait;
    use DeleteCluster\DeleteClusterTrait;
    use DeleteClusterPolicy\DeleteClusterPolicyTrait;
    use GetCluster\GetClusterTrait;
    use GetClusterPolicy\GetClusterPolicyTrait;
    use GetVpcEndpointServiceName\GetVpcEndpointServiceNameTrait;
    use ListClusters\ListClustersTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutClusterPolicy\PutClusterPolicyTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateCluster\UpdateClusterTrait;
}
