<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ValidateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ParameterKey
 * @property string|null $DefaultValue
 * @property bool|null $NoEcho
 * @property string|null $Description
 */
class TemplateParameter extends Shape
{
    /**
     * @param array{
     *     ParameterKey?: string|null,
     *     DefaultValue?: string|null,
     *     NoEcho?: bool|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
