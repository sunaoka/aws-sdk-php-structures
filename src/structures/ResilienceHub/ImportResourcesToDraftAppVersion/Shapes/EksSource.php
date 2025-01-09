<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ImportResourcesToDraftAppVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eksClusterArn
 * @property list<string> $namespaces
 */
class EksSource extends Shape
{
    /**
     * @param array{
     *     eksClusterArn: string,
     *     namespaces: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
