<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ListResourcesByConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AzureQueryScope|null $Scope
 */
class AzureRegionsQuery extends Shape
{
    /**
     * @param array{Scope?: AzureQueryScope|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
