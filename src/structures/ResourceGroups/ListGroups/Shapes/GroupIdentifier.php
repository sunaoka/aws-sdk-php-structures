<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\ListGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GroupName
 * @property string $GroupArn
 * @property string $Description
 * @property int<1, 10> $Criticality
 * @property string $Owner
 * @property string $DisplayName
 */
class GroupIdentifier extends Shape
{
    /**
     * @param array{
     *     GroupName?: string,
     *     GroupArn?: string,
     *     Description?: string,
     *     Criticality?: int<1, 10>,
     *     Owner?: string,
     *     DisplayName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
