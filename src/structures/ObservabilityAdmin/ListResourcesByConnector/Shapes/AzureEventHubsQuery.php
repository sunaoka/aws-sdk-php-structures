<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ListResourcesByConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AzureQueryScope|null $Scope
 * @property string|null $NamespaceName
 * @property string|null $Region
 */
class AzureEventHubsQuery extends Shape
{
    /**
     * @param array{
     *     Scope?: AzureQueryScope|null,
     *     NamespaceName?: string|null,
     *     Region?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
