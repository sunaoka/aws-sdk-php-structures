<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\AssociateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'READ_ONLY'|'MUTATIVE'|'DESTRUCTIVE'|null $toolClassification
 */
class MCPToolDetail extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     toolClassification?: 'READ_ONLY'|'MUTATIVE'|'DESTRUCTIVE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
