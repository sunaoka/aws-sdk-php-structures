<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\CreateDataIntegrationAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StartTime
 * @property string $EndTime
 */
class OnDemandConfiguration extends Shape
{
    /**
     * @param array{
     *     StartTime: string,
     *     EndTime?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
