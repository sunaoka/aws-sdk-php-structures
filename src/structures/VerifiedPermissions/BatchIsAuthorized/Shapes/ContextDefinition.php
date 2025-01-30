<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\BatchIsAuthorized\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, AttributeValue>|null $contextMap
 * @property string|null $cedarJson
 */
class ContextDefinition extends Shape
{
    /**
     * @param array{
     *     contextMap?: array<string, AttributeValue>|null,
     *     cedarJson?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
