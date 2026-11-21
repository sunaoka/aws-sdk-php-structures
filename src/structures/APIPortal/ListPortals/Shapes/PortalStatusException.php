<?php

namespace Sunaoka\Aws\Structures\APIPortal\ListPortals\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INTERNAL_FAILURE'|'UNSHARED_PRODUCT_EXCEPTION'|'CLOUDFRONT_DOMAIN_IN_USE'|'MISSING_CLOUDFRONT_PERMISSIONS'|null $exception
 * @property string|null $message
 */
class PortalStatusException extends Shape
{
    /**
     * @param array{
     *     exception?: 'INTERNAL_FAILURE'|'UNSHARED_PRODUCT_EXCEPTION'|'CLOUDFRONT_DOMAIN_IN_USE'|'MISSING_CLOUDFRONT_PERMISSIONS'|null,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
