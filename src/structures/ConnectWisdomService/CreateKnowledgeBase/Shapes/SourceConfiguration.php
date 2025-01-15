<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\CreateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AppIntegrationsConfiguration|null $appIntegrations
 */
class SourceConfiguration extends Shape
{
    /**
     * @param array{appIntegrations?: AppIntegrationsConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
