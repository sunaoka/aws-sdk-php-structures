<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetSecurityControlDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property ConfigurationOptions $ConfigurationOptions
 */
class ParameterDefinition extends Shape
{
    /**
     * @param array{
     *     Description: string,
     *     ConfigurationOptions: ConfigurationOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
