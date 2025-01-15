<?php

namespace Sunaoka\Aws\Structures\QConnect\GetKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AppIntegrationsConfiguration|null $appIntegrations
 * @property ManagedSourceConfiguration|null $managedSourceConfiguration
 */
class SourceConfiguration extends Shape
{
    /**
     * @param array{
     *     appIntegrations?: AppIntegrationsConfiguration|null,
     *     managedSourceConfiguration?: ManagedSourceConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
