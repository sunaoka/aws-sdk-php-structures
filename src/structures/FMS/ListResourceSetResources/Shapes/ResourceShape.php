<?php

namespace Sunaoka\Aws\Structures\FMS\ListResourceSetResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $URI
 * @property string|null $AccountId
 */
class ResourceShape extends Shape
{
    /**
     * @param array{
     *     URI: string,
     *     AccountId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
