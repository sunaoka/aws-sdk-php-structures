<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeConnectorProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $profileProperties
 * @property OAuth2Properties|null $oAuth2Properties
 */
class CustomConnectorProfileProperties extends Shape
{
    /**
     * @param array{
     *     profileProperties?: array<string, string>|null,
     *     oAuth2Properties?: OAuth2Properties|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
