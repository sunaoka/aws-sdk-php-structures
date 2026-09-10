<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\CreateInputSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $clusterArn
 * @property list<string> $namespaces
 * @property EksLabelSelector|null $labelSelector
 */
class EksSource extends Shape
{
    /**
     * @param array{
     *     clusterArn: string,
     *     namespaces: list<string>,
     *     labelSelector?: EksLabelSelector|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
