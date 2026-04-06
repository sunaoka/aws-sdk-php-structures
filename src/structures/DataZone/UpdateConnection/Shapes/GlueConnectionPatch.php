<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $description
 * @property array<string, string>|null $connectionProperties
 * @property AuthenticationConfigurationPatch|null $authenticationConfiguration
 */
class GlueConnectionPatch extends Shape
{
    /**
     * @param array{
     *     description?: string|null,
     *     connectionProperties?: array<string, string>|null,
     *     authenticationConfiguration?: AuthenticationConfigurationPatch|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
