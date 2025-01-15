<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\PutSchema\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $cedarJson
 */
class SchemaDefinition extends Shape
{
    /**
     * @param array{cedarJson?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
