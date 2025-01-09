<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\CreateGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GroupArn
 * @property string $Name
 * @property string $Description
 * @property int<1, 10> $Criticality
 * @property string $Owner
 * @property string $DisplayName
 * @property array<string, string> $ApplicationTag
 */
class Group extends Shape
{
    /**
     * @param array{
     *     GroupArn: string,
     *     Name: string,
     *     Description?: string,
     *     Criticality?: int<1, 10>,
     *     Owner?: string,
     *     DisplayName?: string,
     *     ApplicationTag?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
