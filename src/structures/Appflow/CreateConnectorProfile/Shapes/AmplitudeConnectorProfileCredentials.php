<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $apiKey
 * @property string $secretKey
 */
class AmplitudeConnectorProfileCredentials extends Shape
{
    /**
     * @param array{
     *     apiKey: string,
     *     secretKey: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
