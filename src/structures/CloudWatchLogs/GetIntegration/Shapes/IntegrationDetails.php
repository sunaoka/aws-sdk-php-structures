<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OpenSearchIntegrationDetails|null $openSearchIntegrationDetails
 */
class IntegrationDetails extends Shape
{
    /**
     * @param array{openSearchIntegrationDetails?: OpenSearchIntegrationDetails|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
