<?php

namespace Sunaoka\Aws\Structures\Batch\CreateComputeEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eksClusterArn
 * @property string $kubernetesNamespace
 * @property EksAccessEntry|null $accessEntry
 */
class EksConfiguration extends Shape
{
    /**
     * @param array{
     *     eksClusterArn: string,
     *     kubernetesNamespace: string,
     *     accessEntry?: EksAccessEntry|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
