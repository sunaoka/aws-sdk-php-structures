<?php

namespace Sunaoka\Aws\Structures\AppFabric\ListIngestions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $app
 * @property string $tenantId
 * @property 'enabled'|'disabled' $state
 */
class IngestionSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     app: string,
     *     tenantId: string,
     *     state: 'enabled'|'disabled'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
