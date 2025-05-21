<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateDistributionTenant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Domain
 */
class DomainItem extends Shape
{
    /**
     * @param array{Domain: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
