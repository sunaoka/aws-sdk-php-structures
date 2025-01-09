<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\DescribeWorkspace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $prefixListIds
 * @property list<string> $vpceIds
 */
class NetworkAccessConfiguration extends Shape
{
    /**
     * @param array{
     *     prefixListIds: list<string>,
     *     vpceIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
