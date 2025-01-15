<?php

namespace Sunaoka\Aws\Structures\Ec2\AuthorizeSecurityGroupEgress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property string|null $PrefixListId
 */
class PrefixListId extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     PrefixListId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
