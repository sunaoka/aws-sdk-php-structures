<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\CreateGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Type
 * @property list<GroupConfigurationParameter>|null $Parameters
 */
class GroupConfigurationItem extends Shape
{
    /**
     * @param array{
     *     Type: string,
     *     Parameters?: list<GroupConfigurationParameter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
