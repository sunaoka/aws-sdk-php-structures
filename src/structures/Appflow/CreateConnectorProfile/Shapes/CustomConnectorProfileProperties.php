<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $profileProperties
 * @property OAuth2Properties $oAuth2Properties
 */
class CustomConnectorProfileProperties extends Shape
{
    /**
     * @param array{
     *     profileProperties?: array<string, string>,
     *     oAuth2Properties?: OAuth2Properties
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
