<?php

namespace Sunaoka\Aws\Structures\S3\ListBucketAnalyticsConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Prefix
 * @property list<Tag>|null $Tags
 */
class AnalyticsAndOperator extends Shape
{
    /**
     * @param array{
     *     Prefix?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
