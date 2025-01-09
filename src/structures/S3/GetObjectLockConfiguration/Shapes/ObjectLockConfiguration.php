<?php

namespace Sunaoka\Aws\Structures\S3\GetObjectLockConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Enabled' $ObjectLockEnabled
 * @property ObjectLockRule $Rule
 */
class ObjectLockConfiguration extends Shape
{
    /**
     * @param array{
     *     ObjectLockEnabled?: 'Enabled',
     *     Rule?: ObjectLockRule
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
