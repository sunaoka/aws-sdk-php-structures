<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeVolumes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RootSquash
 * @property list<string> $NoSquashNids
 */
class LustreRootSquashConfiguration extends Shape
{
    /**
     * @param array{
     *     RootSquash?: string,
     *     NoSquashNids?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
