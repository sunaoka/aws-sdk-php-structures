<?php

namespace Sunaoka\Aws\Structures\Odb\GetAutonomousDatabase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CUSTOMER_MANAGED_AWS_SECRET'|'API_REQUEST_PARAMETER'|null $adminPasswordSource
 * @property AdminPasswordSourceConfiguration|null $adminPasswordSourceConfiguration
 */
class AdminPasswordSourceSummary extends Shape
{
    /**
     * @param array{
     *     adminPasswordSource?: 'CUSTOMER_MANAGED_AWS_SECRET'|'API_REQUEST_PARAMETER'|null,
     *     adminPasswordSourceConfiguration?: AdminPasswordSourceConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
