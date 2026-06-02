<?php

namespace Sunaoka\Aws\Structures\Lambda\CreateCapacityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'None'|'Explicit'|null $Mode
 * @property array<string, string>|null $ExplicitTags
 */
class PropagateTags extends Shape
{
    /**
     * @param array{
     *     Mode?: 'None'|'Explicit'|null,
     *     ExplicitTags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
