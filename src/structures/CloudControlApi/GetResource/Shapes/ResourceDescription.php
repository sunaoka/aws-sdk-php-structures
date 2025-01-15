<?php

namespace Sunaoka\Aws\Structures\CloudControlApi\GetResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Identifier
 * @property string|null $Properties
 */
class ResourceDescription extends Shape
{
    /**
     * @param array{
     *     Identifier?: string|null,
     *     Properties?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
