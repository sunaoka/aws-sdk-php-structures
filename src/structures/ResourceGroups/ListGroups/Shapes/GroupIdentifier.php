<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\ListGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GroupName
 * @property string|null $GroupArn
 * @property string|null $Description
 * @property int<1, 10>|null $Criticality
 * @property string|null $Owner
 * @property string|null $DisplayName
 */
class GroupIdentifier extends Shape
{
    /**
     * @param array{
     *     GroupName?: string|null,
     *     GroupArn?: string|null,
     *     Description?: string|null,
     *     Criticality?: int<1, 10>|null,
     *     Owner?: string|null,
     *     DisplayName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
