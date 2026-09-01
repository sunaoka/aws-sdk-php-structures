<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\CreateRegistry\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ORGANIZATION' $scope
 * @property bool $enabled
 */
class AutoDetectionConfiguration extends Shape
{
    /**
     * @param array{
     *     scope: 'ORGANIZATION',
     *     enabled: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
