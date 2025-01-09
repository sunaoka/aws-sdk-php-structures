<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $apiKey
 * @property string $applicationKey
 */
class DatadogConnectorProfileCredentials extends Shape
{
    /**
     * @param array{
     *     apiKey: string,
     *     applicationKey: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
