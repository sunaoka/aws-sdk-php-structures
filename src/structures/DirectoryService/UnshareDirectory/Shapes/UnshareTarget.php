<?php

namespace Sunaoka\Aws\Structures\DirectoryService\UnshareDirectory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property 'ACCOUNT' $Type
 */
class UnshareTarget extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Type: 'ACCOUNT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
