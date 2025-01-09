<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING'|'CREATING'|'BUILDING'|'TESTING'|'DISTRIBUTING'|'INTEGRATING'|'AVAILABLE'|'CANCELLED'|'FAILED'|'DEPRECATED'|'DELETED'|'DISABLED' $status
 * @property string $reason
 */
class ImageState extends Shape
{
    /**
     * @param array{
     *     status?: 'PENDING'|'CREATING'|'BUILDING'|'TESTING'|'DISTRIBUTING'|'INTEGRATING'|'AVAILABLE'|'CANCELLED'|'FAILED'|'DEPRECATED'|'DELETED'|'DISABLED',
     *     reason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
