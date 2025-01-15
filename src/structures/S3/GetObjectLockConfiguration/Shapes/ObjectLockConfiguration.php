<?php

namespace Sunaoka\Aws\Structures\S3\GetObjectLockConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Enabled'|null $ObjectLockEnabled
 * @property ObjectLockRule|null $Rule
 */
class ObjectLockConfiguration extends Shape
{
    /**
     * @param array{
     *     ObjectLockEnabled?: 'Enabled'|null,
     *     Rule?: ObjectLockRule|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
