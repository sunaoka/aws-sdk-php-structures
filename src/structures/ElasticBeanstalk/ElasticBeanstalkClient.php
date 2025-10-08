<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk;

class ElasticBeanstalkClient extends \Aws\ElasticBeanstalk\ElasticBeanstalkClient
{
    use AbortEnvironmentUpdate\AbortEnvironmentUpdateTrait;
    use ApplyEnvironmentManagedAction\ApplyEnvironmentManagedActionTrait;
    use AssociateEnvironmentOperationsRole\AssociateEnvironmentOperationsRoleTrait;
    use CheckDNSAvailability\CheckDNSAvailabilityTrait;
    use ComposeEnvironments\ComposeEnvironmentsTrait;
    use CreateApplication\CreateApplicationTrait;
    use CreateApplicationVersion\CreateApplicationVersionTrait;
    use CreateConfigurationTemplate\CreateConfigurationTemplateTrait;
    use CreateEnvironment\CreateEnvironmentTrait;
    use CreatePlatformVersion\CreatePlatformVersionTrait;
    use CreateStorageLocation\CreateStorageLocationTrait;
    use DeleteApplication\DeleteApplicationTrait;
    use DeleteApplicationVersion\DeleteApplicationVersionTrait;
    use DeleteConfigurationTemplate\DeleteConfigurationTemplateTrait;
    use DeleteEnvironmentConfiguration\DeleteEnvironmentConfigurationTrait;
    use DeletePlatformVersion\DeletePlatformVersionTrait;
    use DescribeAccountAttributes\DescribeAccountAttributesTrait;
    use DescribeApplicationVersions\DescribeApplicationVersionsTrait;
    use DescribeApplications\DescribeApplicationsTrait;
    use DescribeConfigurationOptions\DescribeConfigurationOptionsTrait;
    use DescribeConfigurationSettings\DescribeConfigurationSettingsTrait;
    use DescribeEnvironmentHealth\DescribeEnvironmentHealthTrait;
    use DescribeEnvironmentManagedActionHistory\DescribeEnvironmentManagedActionHistoryTrait;
    use DescribeEnvironmentManagedActions\DescribeEnvironmentManagedActionsTrait;
    use DescribeEnvironmentResources\DescribeEnvironmentResourcesTrait;
    use DescribeEnvironments\DescribeEnvironmentsTrait;
    use DescribeEvents\DescribeEventsTrait;
    use DescribeInstancesHealth\DescribeInstancesHealthTrait;
    use DescribePlatformVersion\DescribePlatformVersionTrait;
    use DisassociateEnvironmentOperationsRole\DisassociateEnvironmentOperationsRoleTrait;
    use ListAvailableSolutionStacks\ListAvailableSolutionStacksTrait;
    use ListPlatformBranches\ListPlatformBranchesTrait;
    use ListPlatformVersions\ListPlatformVersionsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use RebuildEnvironment\RebuildEnvironmentTrait;
    use RequestEnvironmentInfo\RequestEnvironmentInfoTrait;
    use RestartAppServer\RestartAppServerTrait;
    use RetrieveEnvironmentInfo\RetrieveEnvironmentInfoTrait;
    use SwapEnvironmentCNAMEs\SwapEnvironmentCNAMEsTrait;
    use TerminateEnvironment\TerminateEnvironmentTrait;
    use UpdateApplication\UpdateApplicationTrait;
    use UpdateApplicationResourceLifecycle\UpdateApplicationResourceLifecycleTrait;
    use UpdateApplicationVersion\UpdateApplicationVersionTrait;
    use UpdateConfigurationTemplate\UpdateConfigurationTemplateTrait;
    use UpdateEnvironment\UpdateEnvironmentTrait;
    use UpdateTagsForResource\UpdateTagsForResourceTrait;
    use ValidateConfigurationSettings\ValidateConfigurationSettingsTrait;
}
