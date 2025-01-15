<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketAccelerateConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Enabled'|'Suspended'|null $Status
 */
class AccelerateConfiguration extends Shape
{
    /**
     * @param array{Status?: 'Enabled'|'Suspended'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
