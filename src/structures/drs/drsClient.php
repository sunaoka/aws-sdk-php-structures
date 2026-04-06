<?php

namespace Sunaoka\Aws\Structures\drs;

class drsClient extends \Aws\drs\drsClient
{
    use AssociateSourceNetworkStack\AssociateSourceNetworkStackTrait;
    use CreateExtendedSourceServer\CreateExtendedSourceServerTrait;
    use CreateLaunchConfigurationTemplate\CreateLaunchConfigurationTemplateTrait;
    use CreateReplicationConfigurationTemplate\CreateReplicationConfigurationTemplateTrait;
    use CreateSourceNetwork\CreateSourceNetworkTrait;
    use DeleteJob\DeleteJobTrait;
    use DeleteLaunchAction\DeleteLaunchActionTrait;
    use DeleteLaunchConfigurationTemplate\DeleteLaunchConfigurationTemplateTrait;
    use DeleteRecoveryInstance\DeleteRecoveryInstanceTrait;
    use DeleteReplicationConfigurationTemplate\DeleteReplicationConfigurationTemplateTrait;
    use DeleteSourceNetwork\DeleteSourceNetworkTrait;
    use DeleteSourceServer\DeleteSourceServerTrait;
    use DescribeJobLogItems\DescribeJobLogItemsTrait;
    use DescribeJobs\DescribeJobsTrait;
    use DescribeLaunchConfigurationTemplates\DescribeLaunchConfigurationTemplatesTrait;
    use DescribeRecoveryInstances\DescribeRecoveryInstancesTrait;
    use DescribeRecoverySnapshots\DescribeRecoverySnapshotsTrait;
    use DescribeReplicationConfigurationTemplates\DescribeReplicationConfigurationTemplatesTrait;
    use DescribeSourceNetworks\DescribeSourceNetworksTrait;
    use DescribeSourceServers\DescribeSourceServersTrait;
    use DisconnectRecoveryInstance\DisconnectRecoveryInstanceTrait;
    use DisconnectSourceServer\DisconnectSourceServerTrait;
    use ExportSourceNetworkCfnTemplate\ExportSourceNetworkCfnTemplateTrait;
    use GetFailbackReplicationConfiguration\GetFailbackReplicationConfigurationTrait;
    use GetLaunchConfiguration\GetLaunchConfigurationTrait;
    use GetReplicationConfiguration\GetReplicationConfigurationTrait;
    use InitializeService\InitializeServiceTrait;
    use ListExtensibleSourceServers\ListExtensibleSourceServersTrait;
    use ListLaunchActions\ListLaunchActionsTrait;
    use ListStagingAccounts\ListStagingAccountsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutLaunchAction\PutLaunchActionTrait;
    use RetryDataReplication\RetryDataReplicationTrait;
    use ReverseReplication\ReverseReplicationTrait;
    use StartFailbackLaunch\StartFailbackLaunchTrait;
    use StartRecovery\StartRecoveryTrait;
    use StartReplication\StartReplicationTrait;
    use StartSourceNetworkRecovery\StartSourceNetworkRecoveryTrait;
    use StartSourceNetworkReplication\StartSourceNetworkReplicationTrait;
    use StopFailback\StopFailbackTrait;
    use StopReplication\StopReplicationTrait;
    use StopSourceNetworkReplication\StopSourceNetworkReplicationTrait;
    use TagResource\TagResourceTrait;
    use TerminateRecoveryInstances\TerminateRecoveryInstancesTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateFailbackReplicationConfiguration\UpdateFailbackReplicationConfigurationTrait;
    use UpdateLaunchConfiguration\UpdateLaunchConfigurationTrait;
    use UpdateLaunchConfigurationTemplate\UpdateLaunchConfigurationTemplateTrait;
    use UpdateReplicationConfiguration\UpdateReplicationConfigurationTrait;
    use UpdateReplicationConfigurationTemplate\UpdateReplicationConfigurationTemplateTrait;
}
