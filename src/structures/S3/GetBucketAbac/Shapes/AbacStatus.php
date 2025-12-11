<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketAbac\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Enabled'|'Disabled'|null $Status
 */
class AbacStatus extends Shape
{
    /**
     * @param array{Status?: 'Enabled'|'Disabled'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
