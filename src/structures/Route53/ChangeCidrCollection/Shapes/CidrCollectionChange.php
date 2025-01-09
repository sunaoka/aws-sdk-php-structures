<?php

namespace Sunaoka\Aws\Structures\Route53\ChangeCidrCollection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LocationName
 * @property 'PUT'|'DELETE_IF_EXISTS' $Action
 * @property list<string> $CidrList
 */
class CidrCollectionChange extends Shape
{
    /**
     * @param array{
     *     LocationName: string,
     *     Action: 'PUT'|'DELETE_IF_EXISTS',
     *     CidrList: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
