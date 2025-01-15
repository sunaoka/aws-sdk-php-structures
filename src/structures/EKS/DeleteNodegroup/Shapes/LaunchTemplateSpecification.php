<?php

namespace Sunaoka\Aws\Structures\EKS\DeleteNodegroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $version
 * @property string|null $id
 */
class LaunchTemplateSpecification extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     version?: string|null,
     *     id?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
