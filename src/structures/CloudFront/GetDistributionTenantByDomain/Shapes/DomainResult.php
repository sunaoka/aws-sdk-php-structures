<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetDistributionTenantByDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Domain
 * @property 'active'|'inactive'|null $Status
 * @property 'any'|'anycast-ip-list-only'|null $ServeOn
 */
class DomainResult extends Shape
{
    /**
     * @param array{
     *     Domain: string,
     *     Status?: 'active'|'inactive'|null,
     *     ServeOn?: 'any'|'anycast-ip-list-only'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
