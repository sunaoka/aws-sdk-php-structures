<?php

namespace Sunaoka\Aws\Structures\SSMQuickSetup\GetServiceSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ExplorerEnablingRoleArn
 */
class ServiceSettings extends Shape
{
    /**
     * @param array{ExplorerEnablingRoleArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
