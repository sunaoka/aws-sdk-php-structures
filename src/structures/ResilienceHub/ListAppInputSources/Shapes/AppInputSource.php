<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListAppInputSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EksSourceClusterNamespace $eksSourceClusterNamespace
 * @property 'CfnStack'|'Resource'|'AppRegistryApp'|'ResourceGroup'|'Terraform'|'EKS' $importType
 * @property int $resourceCount
 * @property string $sourceArn
 * @property string $sourceName
 * @property TerraformSource $terraformSource
 */
class AppInputSource extends Shape
{
    /**
     * @param array{
     *     eksSourceClusterNamespace?: EksSourceClusterNamespace,
     *     importType: 'CfnStack'|'Resource'|'AppRegistryApp'|'ResourceGroup'|'Terraform'|'EKS',
     *     resourceCount?: int,
     *     sourceArn?: string,
     *     sourceName?: string,
     *     terraformSource?: TerraformSource
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
