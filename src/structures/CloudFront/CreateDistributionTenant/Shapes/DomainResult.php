<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateDistributionTenant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Domain
 * @property 'active'|'inactive'|null $Status
 */
class DomainResult extends Shape
{
    /**
     * @param array{
     *     Domain: string,
     *     Status?: 'active'|'inactive'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
