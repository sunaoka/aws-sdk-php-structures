<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribePrefixLists\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Cidrs
 * @property string $PrefixListId
 * @property string $PrefixListName
 */
class PrefixList extends Shape
{
    /**
     * @param array{
     *     Cidrs?: list<string>,
     *     PrefixListId?: string,
     *     PrefixListName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
