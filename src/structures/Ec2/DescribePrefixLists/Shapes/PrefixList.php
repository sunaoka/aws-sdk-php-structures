<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribePrefixLists\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Cidrs
 * @property string|null $PrefixListId
 * @property string|null $PrefixListName
 */
class PrefixList extends Shape
{
    /**
     * @param array{
     *     Cidrs?: list<string>|null,
     *     PrefixListId?: string|null,
     *     PrefixListName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
