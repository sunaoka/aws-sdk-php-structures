<?php

namespace Sunaoka\Aws\Structures\DAX;

class DAXClient extends \Aws\DAX\DAXClient
{
    use CreateCluster\CreateClusterTrait;
    use CreateParameterGroup\CreateParameterGroupTrait;
    use CreateSubnetGroup\CreateSubnetGroupTrait;
    use DecreaseReplicationFactor\DecreaseReplicationFactorTrait;
    use DeleteCluster\DeleteClusterTrait;
    use DeleteParameterGroup\DeleteParameterGroupTrait;
    use DeleteSubnetGroup\DeleteSubnetGroupTrait;
    use DescribeClusters\DescribeClustersTrait;
    use DescribeDefaultParameters\DescribeDefaultParametersTrait;
    use DescribeEvents\DescribeEventsTrait;
    use DescribeParameterGroups\DescribeParameterGroupsTrait;
    use DescribeParameters\DescribeParametersTrait;
    use DescribeSubnetGroups\DescribeSubnetGroupsTrait;
    use IncreaseReplicationFactor\IncreaseReplicationFactorTrait;
    use ListTags\ListTagsTrait;
    use RebootNode\RebootNodeTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateCluster\UpdateClusterTrait;
    use UpdateParameterGroup\UpdateParameterGroupTrait;
    use UpdateSubnetGroup\UpdateSubnetGroupTrait;
}
