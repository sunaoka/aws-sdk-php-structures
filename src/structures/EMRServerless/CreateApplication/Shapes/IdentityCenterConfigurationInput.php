<?php

namespace Sunaoka\Aws\Structures\EMRServerless\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $identityCenterInstanceArn
 */
class IdentityCenterConfigurationInput extends Shape
{
    /**
     * @param array{identityCenterInstanceArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
