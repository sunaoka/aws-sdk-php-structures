<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindingsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'resources.tags'|null $FieldName
 * @property MapFilter|null $Filter
 */
class OcsfMapFilter extends Shape
{
    /**
     * @param array{
     *     FieldName?: 'resources.tags'|null,
     *     Filter?: MapFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
