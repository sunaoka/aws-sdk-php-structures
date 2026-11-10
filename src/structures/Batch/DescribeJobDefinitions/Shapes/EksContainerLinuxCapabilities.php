<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $add
 * @property list<string>|null $drop
 */
class EksContainerLinuxCapabilities extends Shape
{
    /**
     * @param array{
     *     add?: list<string>|null,
     *     drop?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
