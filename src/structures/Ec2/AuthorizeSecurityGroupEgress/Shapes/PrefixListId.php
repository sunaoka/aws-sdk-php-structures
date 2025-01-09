<?php

namespace Sunaoka\Aws\Structures\Ec2\AuthorizeSecurityGroupEgress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property string $PrefixListId
 */
class PrefixListId extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     PrefixListId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
