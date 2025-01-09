<?php

namespace Sunaoka\Aws\Structures\CloudFormation\GetTemplateSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ParameterKey
 * @property string $DefaultValue
 * @property string $ParameterType
 * @property bool $NoEcho
 * @property string $Description
 * @property ParameterConstraints $ParameterConstraints
 */
class ParameterDeclaration extends Shape
{
    /**
     * @param array{
     *     ParameterKey?: string,
     *     DefaultValue?: string,
     *     ParameterType?: string,
     *     NoEcho?: bool,
     *     Description?: string,
     *     ParameterConstraints?: ParameterConstraints
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
