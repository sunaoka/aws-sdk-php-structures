<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\DeleteGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GroupArn
 * @property string $Name
 * @property string|null $Description
 */
class Group extends Shape
{
    /**
     * @param array{
     *     GroupArn: string,
     *     Name: string,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
