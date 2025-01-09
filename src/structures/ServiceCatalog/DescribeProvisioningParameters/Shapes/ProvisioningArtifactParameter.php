<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProvisioningParameters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ParameterKey
 * @property string $DefaultValue
 * @property string $ParameterType
 * @property bool $IsNoEcho
 * @property string $Description
 * @property ParameterConstraints $ParameterConstraints
 */
class ProvisioningArtifactParameter extends Shape
{
    /**
     * @param array{
     *     ParameterKey?: string,
     *     DefaultValue?: string,
     *     ParameterType?: string,
     *     IsNoEcho?: bool,
     *     Description?: string,
     *     ParameterConstraints?: ParameterConstraints
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
