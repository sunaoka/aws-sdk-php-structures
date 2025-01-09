<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\AddDraftAppVersionResourceMappings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $appRegistryAppName
 * @property string $eksSourceName
 * @property string $logicalStackName
 * @property 'CfnStack'|'Resource'|'AppRegistryApp'|'ResourceGroup'|'Terraform'|'EKS' $mappingType
 * @property PhysicalResourceId $physicalResourceId
 * @property string $resourceGroupName
 * @property string $resourceName
 * @property string $terraformSourceName
 */
class ResourceMapping extends Shape
{
    /**
     * @param array{
     *     appRegistryAppName?: string,
     *     eksSourceName?: string,
     *     logicalStackName?: string,
     *     mappingType: 'CfnStack'|'Resource'|'AppRegistryApp'|'ResourceGroup'|'Terraform'|'EKS',
     *     physicalResourceId: PhysicalResourceId,
     *     resourceGroupName?: string,
     *     resourceName?: string,
     *     terraformSourceName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
