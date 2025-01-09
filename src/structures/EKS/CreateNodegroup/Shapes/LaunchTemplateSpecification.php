<?php

namespace Sunaoka\Aws\Structures\EKS\CreateNodegroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $version
 * @property string $id
 */
class LaunchTemplateSpecification extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     version?: string,
     *     id?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
