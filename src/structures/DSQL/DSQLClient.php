<?php

namespace Sunaoka\Aws\Structures\DSQL;

class DSQLClient extends \Aws\DSQL\DSQLClient
{
    use CreateCluster\CreateClusterTrait;
    use CreateStream\CreateStreamTrait;
    use DeleteCluster\DeleteClusterTrait;
    use DeleteClusterPolicy\DeleteClusterPolicyTrait;
    use DeleteStream\DeleteStreamTrait;
    use GetCluster\GetClusterTrait;
    use GetClusterPolicy\GetClusterPolicyTrait;
    use GetStream\GetStreamTrait;
    use GetVpcEndpointServiceName\GetVpcEndpointServiceNameTrait;
    use ListClusters\ListClustersTrait;
    use ListStreams\ListStreamsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutClusterPolicy\PutClusterPolicyTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateCluster\UpdateClusterTrait;
}
