<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListServiceEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $systemName
 * @property string|null $systemArn
 */
class ServiceSystemAssociatedMetadata extends Shape
{
    /**
     * @param array{
     *     systemName?: string|null,
     *     systemArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
