<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyManagedPrefixList\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Cidr
 * @property string|null $Description
 */
class AddPrefixListEntry extends Shape
{
    /**
     * @param array{
     *     Cidr: string,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
