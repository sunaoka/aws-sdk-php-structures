<?php

namespace Sunaoka\Aws\Structures\EMRContainers;

class EMRContainersClient extends \Aws\EMRContainers\EMRContainersClient
{
    use CancelJobRun\CancelJobRunTrait;
    use CreateJobTemplate\CreateJobTemplateTrait;
    use CreateManagedEndpoint\CreateManagedEndpointTrait;
    use CreateSecurityConfiguration\CreateSecurityConfigurationTrait;
    use CreateVirtualCluster\CreateVirtualClusterTrait;
    use DeleteJobTemplate\DeleteJobTemplateTrait;
    use DeleteManagedEndpoint\DeleteManagedEndpointTrait;
    use DeleteVirtualCluster\DeleteVirtualClusterTrait;
    use DescribeJobRun\DescribeJobRunTrait;
    use DescribeJobTemplate\DescribeJobTemplateTrait;
    use DescribeManagedEndpoint\DescribeManagedEndpointTrait;
    use DescribeSecurityConfiguration\DescribeSecurityConfigurationTrait;
    use DescribeVirtualCluster\DescribeVirtualClusterTrait;
    use GetManagedEndpointSessionCredentials\GetManagedEndpointSessionCredentialsTrait;
    use ListJobRuns\ListJobRunsTrait;
    use ListJobTemplates\ListJobTemplatesTrait;
    use ListManagedEndpoints\ListManagedEndpointsTrait;
    use ListSecurityConfigurations\ListSecurityConfigurationsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListVirtualClusters\ListVirtualClustersTrait;
    use StartJobRun\StartJobRunTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
}
