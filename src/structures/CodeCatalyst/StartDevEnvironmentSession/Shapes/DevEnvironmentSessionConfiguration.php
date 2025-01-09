<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\StartDevEnvironmentSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SSM'|'SSH' $sessionType
 * @property ExecuteCommandSessionConfiguration $executeCommandSessionConfiguration
 */
class DevEnvironmentSessionConfiguration extends Shape
{
    /**
     * @param array{
     *     sessionType: 'SSM'|'SSH',
     *     executeCommandSessionConfiguration?: ExecuteCommandSessionConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
