<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketAccelerateConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Enabled'|'Suspended' $Status
 */
class AccelerateConfiguration extends Shape
{
    /**
     * @param array{Status?: 'Enabled'|'Suspended'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
