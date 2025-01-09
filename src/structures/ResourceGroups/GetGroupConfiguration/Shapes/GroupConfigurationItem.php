<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\GetGroupConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Type
 * @property list<GroupConfigurationParameter> $Parameters
 */
class GroupConfigurationItem extends Shape
{
    /**
     * @param array{
     *     Type: string,
     *     Parameters?: list<GroupConfigurationParameter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
