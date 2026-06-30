<?php

namespace Sunaoka\Aws\Structures\CloudFormation\CreateStack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STANDARD'|'EXPRESS'|null $Mode
 * @property bool|null $DisableRollback
 */
class DeploymentConfig extends Shape
{
    /**
     * @param array{
     *     Mode?: 'STANDARD'|'EXPRESS'|null,
     *     DisableRollback?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
