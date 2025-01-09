<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListResourceDelegates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property 'GROUP'|'USER' $Type
 */
class Delegate extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Type: 'GROUP'|'USER'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
