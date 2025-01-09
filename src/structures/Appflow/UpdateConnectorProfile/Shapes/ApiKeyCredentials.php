<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $apiKey
 * @property string $apiSecretKey
 */
class ApiKeyCredentials extends Shape
{
    /**
     * @param array{
     *     apiKey: string,
     *     apiSecretKey?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
