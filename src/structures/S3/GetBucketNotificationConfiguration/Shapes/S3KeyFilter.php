<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketNotificationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FilterRule>|null $FilterRules
 */
class S3KeyFilter extends Shape
{
    /**
     * @param array{FilterRules?: list<FilterRule>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
