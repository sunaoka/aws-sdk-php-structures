<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DeleteAppInputSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EksSourceClusterNamespace|null $eksSourceClusterNamespace
 * @property 'CfnStack'|'Resource'|'AppRegistryApp'|'ResourceGroup'|'Terraform'|'EKS' $importType
 * @property int|null $resourceCount
 * @property string|null $sourceArn
 * @property string|null $sourceName
 * @property TerraformSource|null $terraformSource
 */
class AppInputSource extends Shape
{
    /**
     * @param array{
     *     eksSourceClusterNamespace?: EksSourceClusterNamespace|null,
     *     importType: 'CfnStack'|'Resource'|'AppRegistryApp'|'ResourceGroup'|'Terraform'|'EKS',
     *     resourceCount?: int|null,
     *     sourceArn?: string|null,
     *     sourceName?: string|null,
     *     terraformSource?: TerraformSource|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
