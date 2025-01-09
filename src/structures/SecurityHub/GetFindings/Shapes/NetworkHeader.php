<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Protocol
 * @property NetworkPathComponentDetails $Destination
 * @property NetworkPathComponentDetails $Source
 */
class NetworkHeader extends Shape
{
    /**
     * @param array{
     *     Protocol?: string,
     *     Destination?: NetworkPathComponentDetails,
     *     Source?: NetworkPathComponentDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
