<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateWorkteam\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Groups
 */
class OidcMemberDefinition extends Shape
{
    /**
     * @param array{Groups?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
