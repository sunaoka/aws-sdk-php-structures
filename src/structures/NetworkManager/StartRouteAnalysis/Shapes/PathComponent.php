<?php

namespace Sunaoka\Aws\Structures\NetworkManager\StartRouteAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Sequence
 * @property NetworkResourceSummary|null $Resource
 * @property string|null $DestinationCidrBlock
 */
class PathComponent extends Shape
{
    /**
     * @param array{
     *     Sequence?: int|null,
     *     Resource?: NetworkResourceSummary|null,
     *     DestinationCidrBlock?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
