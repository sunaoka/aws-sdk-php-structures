<?php

namespace Sunaoka\Aws\Structures\DirectoryService\ShareDirectory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property 'ACCOUNT' $Type
 */
class ShareTarget extends Shape
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
