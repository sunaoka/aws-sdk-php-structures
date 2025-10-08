<?php

namespace Sunaoka\Aws\Structures\AppRunner;

class AppRunnerClient extends \Aws\AppRunner\AppRunnerClient
{
    use AssociateCustomDomain\AssociateCustomDomainTrait;
    use CreateAutoScalingConfiguration\CreateAutoScalingConfigurationTrait;
    use CreateConnection\CreateConnectionTrait;
    use CreateObservabilityConfiguration\CreateObservabilityConfigurationTrait;
    use CreateService\CreateServiceTrait;
    use CreateVpcConnector\CreateVpcConnectorTrait;
    use CreateVpcIngressConnection\CreateVpcIngressConnectionTrait;
    use DeleteAutoScalingConfiguration\DeleteAutoScalingConfigurationTrait;
    use DeleteConnection\DeleteConnectionTrait;
    use DeleteObservabilityConfiguration\DeleteObservabilityConfigurationTrait;
    use DeleteService\DeleteServiceTrait;
    use DeleteVpcConnector\DeleteVpcConnectorTrait;
    use DeleteVpcIngressConnection\DeleteVpcIngressConnectionTrait;
    use DescribeAutoScalingConfiguration\DescribeAutoScalingConfigurationTrait;
    use DescribeCustomDomains\DescribeCustomDomainsTrait;
    use DescribeObservabilityConfiguration\DescribeObservabilityConfigurationTrait;
    use DescribeService\DescribeServiceTrait;
    use DescribeVpcConnector\DescribeVpcConnectorTrait;
    use DescribeVpcIngressConnection\DescribeVpcIngressConnectionTrait;
    use DisassociateCustomDomain\DisassociateCustomDomainTrait;
    use ListAutoScalingConfigurations\ListAutoScalingConfigurationsTrait;
    use ListConnections\ListConnectionsTrait;
    use ListObservabilityConfigurations\ListObservabilityConfigurationsTrait;
    use ListOperations\ListOperationsTrait;
    use ListServices\ListServicesTrait;
    use ListServicesForAutoScalingConfiguration\ListServicesForAutoScalingConfigurationTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListVpcConnectors\ListVpcConnectorsTrait;
    use ListVpcIngressConnections\ListVpcIngressConnectionsTrait;
    use PauseService\PauseServiceTrait;
    use ResumeService\ResumeServiceTrait;
    use StartDeployment\StartDeploymentTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateDefaultAutoScalingConfiguration\UpdateDefaultAutoScalingConfigurationTrait;
    use UpdateService\UpdateServiceTrait;
    use UpdateVpcIngressConnection\UpdateVpcIngressConnectionTrait;
}
