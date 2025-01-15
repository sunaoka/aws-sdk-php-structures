<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\ListEffectiveDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $errorStack
 * @property list<string>|null $errorTypes
 */
class EffectiveDeploymentStatusDetails extends Shape
{
    /**
     * @param array{
     *     errorStack?: list<string>|null,
     *     errorTypes?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
