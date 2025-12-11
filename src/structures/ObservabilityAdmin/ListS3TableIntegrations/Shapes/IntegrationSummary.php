<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ListS3TableIntegrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property 'ACTIVE'|'DELETING'|null $Status
 */
class IntegrationSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Status?: 'ACTIVE'|'DELETING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
