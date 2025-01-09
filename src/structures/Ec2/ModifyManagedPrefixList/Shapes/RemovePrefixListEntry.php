<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyManagedPrefixList\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Cidr
 */
class RemovePrefixListEntry extends Shape
{
    /**
     * @param array{Cidr: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
