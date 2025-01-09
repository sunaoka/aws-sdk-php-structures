<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ValidateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ParameterKey
 * @property string $DefaultValue
 * @property bool $NoEcho
 * @property string $Description
 */
class TemplateParameter extends Shape
{
    /**
     * @param array{
     *     ParameterKey?: string,
     *     DefaultValue?: string,
     *     NoEcho?: bool,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
