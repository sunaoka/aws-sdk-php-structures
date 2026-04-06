<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\UpdateGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GroupArn
 * @property string $Name
 * @property string|null $Description
 * @property int<1, 10>|null $Criticality
 * @property string|null $Owner
 * @property string|null $DisplayName
 * @property array<string, string>|null $ApplicationTag
 */
class Group extends Shape
{
    /**
     * @param array{
     *     GroupArn: string,
     *     Name: string,
     *     Description?: string|null,
     *     Criticality?: int<1, 10>|null,
     *     Owner?: string|null,
     *     DisplayName?: string|null,
     *     ApplicationTag?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
