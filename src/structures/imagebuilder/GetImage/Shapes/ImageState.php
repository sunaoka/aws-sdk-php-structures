<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING'|'CREATING'|'BUILDING'|'TESTING'|'DISTRIBUTING'|'INTEGRATING'|'AVAILABLE'|'CANCELLED'|'FAILED'|'DEPRECATED'|'DELETED'|'DISABLED'|null $status
 * @property string|null $reason
 */
class ImageState extends Shape
{
    /**
     * @param array{
     *     status?: 'PENDING'|'CREATING'|'BUILDING'|'TESTING'|'DISTRIBUTING'|'INTEGRATING'|'AVAILABLE'|'CANCELLED'|'FAILED'|'DEPRECATED'|'DELETED'|'DISABLED'|null,
     *     reason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
