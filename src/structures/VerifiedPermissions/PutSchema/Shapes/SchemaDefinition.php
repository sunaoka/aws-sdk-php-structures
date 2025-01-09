<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\PutSchema\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $cedarJson
 */
class SchemaDefinition extends Shape
{
    /**
     * @param array{cedarJson?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
