<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateRedshiftIdcApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Enabled'|'Disabled' $Authorization
 */
class ReadWriteAccess extends Shape
{
    /**
     * @param array{Authorization: 'Enabled'|'Disabled'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
