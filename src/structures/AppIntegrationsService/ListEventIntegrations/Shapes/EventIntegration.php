<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\ListEventIntegrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EventIntegrationArn
 * @property string|null $Name
 * @property string|null $Description
 * @property EventFilter|null $EventFilter
 * @property string|null $EventBridgeBus
 * @property array<string, string>|null $Tags
 */
class EventIntegration extends Shape
{
    /**
     * @param array{
     *     EventIntegrationArn?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     EventFilter?: EventFilter|null,
     *     EventBridgeBus?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
