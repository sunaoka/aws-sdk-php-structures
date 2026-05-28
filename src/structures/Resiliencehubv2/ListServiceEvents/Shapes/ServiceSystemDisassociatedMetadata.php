<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListServiceEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $systemId
 * @property string|null $systemName
 * @property string|null $systemArn
 */
class ServiceSystemDisassociatedMetadata extends Shape
{
    /**
     * @param array{
     *     systemId?: string|null,
     *     systemName?: string|null,
     *     systemArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
