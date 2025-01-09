<?php

namespace Sunaoka\Aws\Structures\NetworkManager\StartRouteAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Sequence
 * @property NetworkResourceSummary $Resource
 * @property string $DestinationCidrBlock
 */
class PathComponent extends Shape
{
    /**
     * @param array{
     *     Sequence?: int,
     *     Resource?: NetworkResourceSummary,
     *     DestinationCidrBlock?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
