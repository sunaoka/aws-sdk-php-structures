<?php

namespace Sunaoka\Aws\Structures\QConnect\ListKnowledgeBases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AppIntegrationsConfiguration $appIntegrations
 * @property ManagedSourceConfiguration $managedSourceConfiguration
 */
class SourceConfiguration extends Shape
{
    /**
     * @param array{
     *     appIntegrations?: AppIntegrationsConfiguration,
     *     managedSourceConfiguration?: ManagedSourceConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
