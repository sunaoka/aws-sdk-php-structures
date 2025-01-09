<?php

namespace Sunaoka\Aws\Structures\mgn\ListTemplateActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $parameterName
 * @property 'STRING' $parameterType
 */
class SsmParameterStoreParameter extends Shape
{
    /**
     * @param array{
     *     parameterName: string,
     *     parameterType: 'STRING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
