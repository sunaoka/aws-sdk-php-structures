<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateDistributionTenant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Domain
 * @property 'any'|'anycast-ip-list-only'|null $ServeOn
 */
class DomainItem extends Shape
{
    /**
     * @param array{
     *     Domain: string,
     *     ServeOn?: 'any'|'anycast-ip-list-only'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
