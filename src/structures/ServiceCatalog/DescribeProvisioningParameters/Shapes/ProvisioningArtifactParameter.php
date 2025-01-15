<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProvisioningParameters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ParameterKey
 * @property string|null $DefaultValue
 * @property string|null $ParameterType
 * @property bool|null $IsNoEcho
 * @property string|null $Description
 * @property ParameterConstraints|null $ParameterConstraints
 */
class ProvisioningArtifactParameter extends Shape
{
    /**
     * @param array{
     *     ParameterKey?: string|null,
     *     DefaultValue?: string|null,
     *     ParameterType?: string|null,
     *     IsNoEcho?: bool|null,
     *     Description?: string|null,
     *     ParameterConstraints?: ParameterConstraints|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
