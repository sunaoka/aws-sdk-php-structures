<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\ListDataIntegrationAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StartTime
 * @property string|null $EndTime
 */
class OnDemandConfiguration extends Shape
{
    /**
     * @param array{
     *     StartTime: string,
     *     EndTime?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
