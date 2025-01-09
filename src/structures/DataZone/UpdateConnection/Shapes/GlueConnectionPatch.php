<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AuthenticationConfigurationPatch $authenticationConfiguration
 * @property array<string, string> $connectionProperties
 * @property string $description
 */
class GlueConnectionPatch extends Shape
{
    /**
     * @param array{
     *     authenticationConfiguration?: AuthenticationConfigurationPatch,
     *     connectionProperties?: array<string, string>,
     *     description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
