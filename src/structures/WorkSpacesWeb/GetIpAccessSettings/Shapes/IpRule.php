<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetIpAccessSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ipRange
 * @property string|null $description
 */
class IpRule extends Shape
{
    /**
     * @param array{
     *     ipRange: string,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
