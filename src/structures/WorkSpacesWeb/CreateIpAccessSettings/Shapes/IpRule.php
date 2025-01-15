<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\CreateIpAccessSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $description
 * @property string $ipRange
 */
class IpRule extends Shape
{
    /**
     * @param array{
     *     description?: string|null,
     *     ipRange: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
