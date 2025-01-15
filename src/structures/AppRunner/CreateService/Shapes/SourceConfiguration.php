<?php

namespace Sunaoka\Aws\Structures\AppRunner\CreateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CodeRepository|null $CodeRepository
 * @property ImageRepository|null $ImageRepository
 * @property bool|null $AutoDeploymentsEnabled
 * @property AuthenticationConfiguration|null $AuthenticationConfiguration
 */
class SourceConfiguration extends Shape
{
    /**
     * @param array{
     *     CodeRepository?: CodeRepository|null,
     *     ImageRepository?: ImageRepository|null,
     *     AutoDeploymentsEnabled?: bool|null,
     *     AuthenticationConfiguration?: AuthenticationConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
