<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Route
 */
class AwsEventsEndpointRoutingConfigFailoverConfigSecondaryDetails extends Shape
{
    /**
     * @param array{Route?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
