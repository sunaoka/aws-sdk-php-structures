<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\CreateGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string>|null $Values
 */
class GroupConfigurationParameter extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Values?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
