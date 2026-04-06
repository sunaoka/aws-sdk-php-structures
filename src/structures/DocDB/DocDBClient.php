<?php

namespace Sunaoka\Aws\Structures\DocDB;

class DocDBClient extends \Aws\DocDB\DocDBClient
{
    use AddSourceIdentifierToSubscription\AddSourceIdentifierToSubscriptionTrait;
    use AddTagsToResource\AddTagsToResourceTrait;
    use ApplyPendingMaintenanceAction\ApplyPendingMaintenanceActionTrait;
    use CopyDBClusterParameterGroup\CopyDBClusterParameterGroupTrait;
    use CopyDBClusterSnapshot\CopyDBClusterSnapshotTrait;
    use CreateDBCluster\CreateDBClusterTrait;
    use CreateDBClusterParameterGroup\CreateDBClusterParameterGroupTrait;
    use CreateDBClusterSnapshot\CreateDBClusterSnapshotTrait;
    use CreateDBInstance\CreateDBInstanceTrait;
    use CreateDBSubnetGroup\CreateDBSubnetGroupTrait;
    use CreateEventSubscription\CreateEventSubscriptionTrait;
    use CreateGlobalCluster\CreateGlobalClusterTrait;
    use DeleteDBCluster\DeleteDBClusterTrait;
    use DeleteDBClusterParameterGroup\DeleteDBClusterParameterGroupTrait;
    use DeleteDBClusterSnapshot\DeleteDBClusterSnapshotTrait;
    use DeleteDBInstance\DeleteDBInstanceTrait;
    use DeleteDBSubnetGroup\DeleteDBSubnetGroupTrait;
    use DeleteEventSubscription\DeleteEventSubscriptionTrait;
    use DeleteGlobalCluster\DeleteGlobalClusterTrait;
    use DescribeCertificates\DescribeCertificatesTrait;
    use DescribeDBClusterParameterGroups\DescribeDBClusterParameterGroupsTrait;
    use DescribeDBClusterParameters\DescribeDBClusterParametersTrait;
    use DescribeDBClusterSnapshotAttributes\DescribeDBClusterSnapshotAttributesTrait;
    use DescribeDBClusterSnapshots\DescribeDBClusterSnapshotsTrait;
    use DescribeDBClusters\DescribeDBClustersTrait;
    use DescribeDBEngineVersions\DescribeDBEngineVersionsTrait;
    use DescribeDBInstances\DescribeDBInstancesTrait;
    use DescribeDBSubnetGroups\DescribeDBSubnetGroupsTrait;
    use DescribeEngineDefaultClusterParameters\DescribeEngineDefaultClusterParametersTrait;
    use DescribeEventCategories\DescribeEventCategoriesTrait;
    use DescribeEventSubscriptions\DescribeEventSubscriptionsTrait;
    use DescribeEvents\DescribeEventsTrait;
    use DescribeGlobalClusters\DescribeGlobalClustersTrait;
    use DescribeOrderableDBInstanceOptions\DescribeOrderableDBInstanceOptionsTrait;
    use DescribePendingMaintenanceActions\DescribePendingMaintenanceActionsTrait;
    use FailoverDBCluster\FailoverDBClusterTrait;
    use FailoverGlobalCluster\FailoverGlobalClusterTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ModifyDBCluster\ModifyDBClusterTrait;
    use ModifyDBClusterParameterGroup\ModifyDBClusterParameterGroupTrait;
    use ModifyDBClusterSnapshotAttribute\ModifyDBClusterSnapshotAttributeTrait;
    use ModifyDBInstance\ModifyDBInstanceTrait;
    use ModifyDBSubnetGroup\ModifyDBSubnetGroupTrait;
    use ModifyEventSubscription\ModifyEventSubscriptionTrait;
    use ModifyGlobalCluster\ModifyGlobalClusterTrait;
    use RebootDBInstance\RebootDBInstanceTrait;
    use RemoveFromGlobalCluster\RemoveFromGlobalClusterTrait;
    use RemoveSourceIdentifierFromSubscription\RemoveSourceIdentifierFromSubscriptionTrait;
    use RemoveTagsFromResource\RemoveTagsFromResourceTrait;
    use ResetDBClusterParameterGroup\ResetDBClusterParameterGroupTrait;
    use RestoreDBClusterFromSnapshot\RestoreDBClusterFromSnapshotTrait;
    use RestoreDBClusterToPointInTime\RestoreDBClusterToPointInTimeTrait;
    use StartDBCluster\StartDBClusterTrait;
    use StopDBCluster\StopDBClusterTrait;
    use SwitchoverGlobalCluster\SwitchoverGlobalClusterTrait;
}
