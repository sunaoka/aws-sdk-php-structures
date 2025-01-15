<?php

namespace Sunaoka\Aws\Structures\AppConfig\GetExtension\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $Uri
 * @property string|null $RoleArn
 */
class Action extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Description?: string|null,
     *     Uri?: string|null,
     *     RoleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
