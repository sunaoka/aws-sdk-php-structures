<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\ListEffectiveDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $errorStack
 * @property list<string> $errorTypes
 */
class EffectiveDeploymentStatusDetails extends Shape
{
    /**
     * @param array{
     *     errorStack?: list<string>,
     *     errorTypes?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
