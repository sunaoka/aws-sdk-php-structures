<?php

namespace Sunaoka\Aws\Structures\EBS\ListChangedBlocks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $BlockIndex
 * @property string|null $FirstBlockToken
 * @property string|null $SecondBlockToken
 */
class ChangedBlock extends Shape
{
    /**
     * @param array{
     *     BlockIndex?: int<0, max>|null,
     *     FirstBlockToken?: string|null,
     *     SecondBlockToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
