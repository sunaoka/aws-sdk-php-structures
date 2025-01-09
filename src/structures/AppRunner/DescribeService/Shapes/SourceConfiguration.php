<?php

namespace Sunaoka\Aws\Structures\AppRunner\DescribeService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CodeRepository $CodeRepository
 * @property ImageRepository $ImageRepository
 * @property bool $AutoDeploymentsEnabled
 * @property AuthenticationConfiguration $AuthenticationConfiguration
 */
class SourceConfiguration extends Shape
{
    /**
     * @param array{
     *     CodeRepository?: CodeRepository,
     *     ImageRepository?: ImageRepository,
     *     AutoDeploymentsEnabled?: bool,
     *     AuthenticationConfiguration?: AuthenticationConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
