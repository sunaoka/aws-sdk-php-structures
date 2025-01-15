<?php

namespace Sunaoka\Aws\Structures\Ec2\GetManagedPrefixListEntries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Cidr
 * @property string|null $Description
 */
class PrefixListEntry extends Shape
{
    /**
     * @param array{
     *     Cidr?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
