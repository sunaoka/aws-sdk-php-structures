<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateIpAccessSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $description
 * @property string $ipRange
 */
class IpRule extends Shape
{
    /**
     * @param array{
     *     description?: string,
     *     ipRange: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
