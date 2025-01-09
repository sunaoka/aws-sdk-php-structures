<?php

namespace Sunaoka\Aws\Structures\EBS\ListChangedBlocks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $BlockIndex
 * @property string $FirstBlockToken
 * @property string $SecondBlockToken
 */
class ChangedBlock extends Shape
{
    /**
     * @param array{
     *     BlockIndex?: int,
     *     FirstBlockToken?: string,
     *     SecondBlockToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
