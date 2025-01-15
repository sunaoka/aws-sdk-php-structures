<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketNotificationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'prefix'|'suffix'|null $Name
 * @property string|null $Value
 */
class FilterRule extends Shape
{
    /**
     * @param array{
     *     Name?: 'prefix'|'suffix'|null,
     *     Value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
