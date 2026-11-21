<?php

namespace Sunaoka\Aws\Structures\APIPortal\ListProductApiPages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INTERNAL_FAILURE'|'RESOURCE_DELETED'|'MEMBER_LEFT_ORG'|null $exception
 * @property string|null $message
 */
class ProductApiPageStatusException extends Shape
{
    /**
     * @param array{
     *     exception?: 'INTERNAL_FAILURE'|'RESOURCE_DELETED'|'MEMBER_LEFT_ORG'|null,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
