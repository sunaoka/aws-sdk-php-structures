<?php

namespace Sunaoka\Aws\Structures\AppConfig\UpdateExtension\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Description
 * @property string $Uri
 * @property string $RoleArn
 */
class Action extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Description?: string,
     *     Uri?: string,
     *     RoleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
