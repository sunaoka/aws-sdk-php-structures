<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OpenSearchIntegrationDetails $openSearchIntegrationDetails
 */
class IntegrationDetails extends Shape
{
    /**
     * @param array{openSearchIntegrationDetails?: OpenSearchIntegrationDetails} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
