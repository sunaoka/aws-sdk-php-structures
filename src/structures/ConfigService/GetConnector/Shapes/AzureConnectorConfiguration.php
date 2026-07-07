<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $tenantIdentifier
 * @property string $clientIdentifier
 */
class AzureConnectorConfiguration extends Shape
{
    /**
     * @param array{
     *     tenantIdentifier: string,
     *     clientIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
