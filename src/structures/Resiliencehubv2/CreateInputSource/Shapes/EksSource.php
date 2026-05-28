<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\CreateInputSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $clusterArn
 * @property list<string> $namespaces
 */
class EksSource extends Shape
{
    /**
     * @param array{
     *     clusterArn: string,
     *     namespaces: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
