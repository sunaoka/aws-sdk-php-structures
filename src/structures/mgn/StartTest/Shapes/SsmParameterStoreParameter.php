<?php

namespace Sunaoka\Aws\Structures\mgn\StartTest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STRING'|'SECURE_STRING' $parameterType
 * @property string $parameterName
 */
class SsmParameterStoreParameter extends Shape
{
    /**
     * @param array{
     *     parameterType: 'STRING'|'SECURE_STRING',
     *     parameterName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
