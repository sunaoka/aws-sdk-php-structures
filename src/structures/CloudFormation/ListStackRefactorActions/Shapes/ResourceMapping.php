<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackRefactorActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceLocation $Source
 * @property ResourceLocation $Destination
 */
class ResourceMapping extends Shape
{
    /**
     * @param array{
     *     Source: ResourceLocation,
     *     Destination: ResourceLocation
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
