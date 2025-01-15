<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $apiKey
 * @property string|null $apiSecretKey
 */
class ApiKeyCredentials extends Shape
{
    /**
     * @param array{
     *     apiKey: string,
     *     apiSecretKey?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
