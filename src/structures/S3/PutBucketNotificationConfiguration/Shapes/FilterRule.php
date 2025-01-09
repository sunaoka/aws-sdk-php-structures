<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketNotificationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'prefix'|'suffix' $Name
 * @property string $Value
 */
class FilterRule extends Shape
{
    /**
     * @param array{
     *     Name?: 'prefix'|'suffix',
     *     Value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
