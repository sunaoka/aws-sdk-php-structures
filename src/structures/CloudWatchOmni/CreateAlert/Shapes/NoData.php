<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\CreateAlert\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OK'|'WARNING'|'CRITICAL'|'NODATA' $treatAs
 */
class NoData extends Shape
{
    /**
     * @param array{treatAs: 'OK'|'WARNING'|'CRITICAL'|'NODATA'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
