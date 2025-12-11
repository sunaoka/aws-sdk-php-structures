<?php

namespace Sunaoka\Aws\Structures\Lambda\PublishVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PER_TENANT' $TenantIsolationMode
 */
class TenancyConfig extends Shape
{
    /**
     * @param array{TenantIsolationMode: 'PER_TENANT'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
