<?php

namespace Sunaoka\Aws\Structures\Ec2\GetManagedPrefixListEntries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Cidr
 * @property string $Description
 */
class PrefixListEntry extends Shape
{
    /**
     * @param array{
     *     Cidr?: string,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
