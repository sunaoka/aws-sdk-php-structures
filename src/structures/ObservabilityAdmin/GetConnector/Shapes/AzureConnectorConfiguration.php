<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TenantIdentifier
 * @property string $ClientIdentifier
 */
class AzureConnectorConfiguration extends Shape
{
    /**
     * @param array{
     *     TenantIdentifier: string,
     *     ClientIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
