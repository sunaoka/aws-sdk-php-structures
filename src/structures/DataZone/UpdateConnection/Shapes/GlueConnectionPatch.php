<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AuthenticationConfigurationPatch|null $authenticationConfiguration
 * @property array<string, string>|null $connectionProperties
 * @property string|null $description
 */
class GlueConnectionPatch extends Shape
{
    /**
     * @param array{
     *     authenticationConfiguration?: AuthenticationConfigurationPatch|null,
     *     connectionProperties?: array<string, string>|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
