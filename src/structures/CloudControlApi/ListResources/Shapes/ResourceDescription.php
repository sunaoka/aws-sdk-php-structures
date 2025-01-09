<?php

namespace Sunaoka\Aws\Structures\CloudControlApi\ListResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Identifier
 * @property string $Properties
 */
class ResourceDescription extends Shape
{
    /**
     * @param array{
     *     Identifier?: string,
     *     Properties?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
