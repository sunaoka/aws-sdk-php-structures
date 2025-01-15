<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListAppVersionResourceMappings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $appRegistryAppName
 * @property string|null $eksSourceName
 * @property string|null $logicalStackName
 * @property 'CfnStack'|'Resource'|'AppRegistryApp'|'ResourceGroup'|'Terraform'|'EKS' $mappingType
 * @property PhysicalResourceId $physicalResourceId
 * @property string|null $resourceGroupName
 * @property string|null $resourceName
 * @property string|null $terraformSourceName
 */
class ResourceMapping extends Shape
{
    /**
     * @param array{
     *     appRegistryAppName?: string|null,
     *     eksSourceName?: string|null,
     *     logicalStackName?: string|null,
     *     mappingType: 'CfnStack'|'Resource'|'AppRegistryApp'|'ResourceGroup'|'Terraform'|'EKS',
     *     physicalResourceId: PhysicalResourceId,
     *     resourceGroupName?: string|null,
     *     resourceName?: string|null,
     *     terraformSourceName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
