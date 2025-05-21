<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateResourceDefinitionVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property ResourceDataContainer $ResourceDataContainer
 */
class ResourceShape extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Name: string,
     *     ResourceDataContainer: ResourceDataContainer
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
