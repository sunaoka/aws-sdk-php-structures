<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\ListKnowledgeBases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AppIntegrationsConfiguration $appIntegrations
 */
class SourceConfiguration extends Shape
{
    /**
     * @param array{appIntegrations?: AppIntegrationsConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
