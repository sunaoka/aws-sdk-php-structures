<?php

namespace Sunaoka\Aws\Structures\MemoryDB;

class MemoryDBClient extends \Aws\MemoryDB\MemoryDBClient
{
    use BatchUpdateCluster\BatchUpdateClusterTrait;
    use CopySnapshot\CopySnapshotTrait;
    use CreateACL\CreateACLTrait;
    use CreateCluster\CreateClusterTrait;
    use CreateMultiRegionCluster\CreateMultiRegionClusterTrait;
    use CreateParameterGroup\CreateParameterGroupTrait;
    use CreateSnapshot\CreateSnapshotTrait;
    use CreateSubnetGroup\CreateSubnetGroupTrait;
    use CreateUser\CreateUserTrait;
    use DeleteACL\DeleteACLTrait;
    use DeleteCluster\DeleteClusterTrait;
    use DeleteMultiRegionCluster\DeleteMultiRegionClusterTrait;
    use DeleteParameterGroup\DeleteParameterGroupTrait;
    use DeleteSnapshot\DeleteSnapshotTrait;
    use DeleteSubnetGroup\DeleteSubnetGroupTrait;
    use DeleteUser\DeleteUserTrait;
    use DescribeACLs\DescribeACLsTrait;
    use DescribeClusters\DescribeClustersTrait;
    use DescribeEngineVersions\DescribeEngineVersionsTrait;
    use DescribeEvents\DescribeEventsTrait;
    use DescribeMultiRegionClusters\DescribeMultiRegionClustersTrait;
    use DescribeMultiRegionParameterGroups\DescribeMultiRegionParameterGroupsTrait;
    use DescribeMultiRegionParameters\DescribeMultiRegionParametersTrait;
    use DescribeParameterGroups\DescribeParameterGroupsTrait;
    use DescribeParameters\DescribeParametersTrait;
    use DescribeReservedNodes\DescribeReservedNodesTrait;
    use DescribeReservedNodesOfferings\DescribeReservedNodesOfferingsTrait;
    use DescribeServiceUpdates\DescribeServiceUpdatesTrait;
    use DescribeSnapshots\DescribeSnapshotsTrait;
    use DescribeSubnetGroups\DescribeSubnetGroupsTrait;
    use DescribeUsers\DescribeUsersTrait;
    use FailoverShard\FailoverShardTrait;
    use ListAllowedMultiRegionClusterUpdates\ListAllowedMultiRegionClusterUpdatesTrait;
    use ListAllowedNodeTypeUpdates\ListAllowedNodeTypeUpdatesTrait;
    use ListTags\ListTagsTrait;
    use PurchaseReservedNodesOffering\PurchaseReservedNodesOfferingTrait;
    use ResetParameterGroup\ResetParameterGroupTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateACL\UpdateACLTrait;
    use UpdateCluster\UpdateClusterTrait;
    use UpdateMultiRegionCluster\UpdateMultiRegionClusterTrait;
    use UpdateParameterGroup\UpdateParameterGroupTrait;
    use UpdateSubnetGroup\UpdateSubnetGroupTrait;
    use UpdateUser\UpdateUserTrait;
}
