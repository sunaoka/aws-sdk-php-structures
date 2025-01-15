<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Protocol
 * @property NetworkPathComponentDetails|null $Destination
 * @property NetworkPathComponentDetails|null $Source
 */
class NetworkHeader extends Shape
{
    /**
     * @param array{
     *     Protocol?: string|null,
     *     Destination?: NetworkPathComponentDetails|null,
     *     Source?: NetworkPathComponentDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
