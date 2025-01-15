<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketAnalyticsConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Prefix
 * @property Tag|null $Tag
 * @property AnalyticsAndOperator|null $And
 */
class AnalyticsFilter extends Shape
{
    /**
     * @param array{
     *     Prefix?: string|null,
     *     Tag?: Tag|null,
     *     And?: AnalyticsAndOperator|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
