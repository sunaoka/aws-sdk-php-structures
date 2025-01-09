<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\ListEventIntegrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EventIntegrationArn
 * @property string $Name
 * @property string $Description
 * @property EventFilter $EventFilter
 * @property string $EventBridgeBus
 * @property array<string, string> $Tags
 */
class EventIntegration extends Shape
{
    /**
     * @param array{
     *     EventIntegrationArn?: string,
     *     Name?: string,
     *     Description?: string,
     *     EventFilter?: EventFilter,
     *     EventBridgeBus?: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
